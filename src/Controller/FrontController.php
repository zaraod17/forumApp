<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Posts;
use App\Entity\Topics;
use App\Entity\User;
use App\Form\PostType;
use App\Repository\CommentRepository;
use App\Repository\UserRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\TopicsRepository;
use App\Repository\PostsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;
use Golonka\BBCode\BBCodeParser;

class FrontController extends AbstractController
{

    /**
     * @Route("/", name="front")
     * @param TopicsRepository $topicsRepository
     * @return Response
     */
    public function mainPage(TopicsRepository $topicsRepository, PostsRepository $postsRepository, CommentRepository $commentRepository): Response
    {

        $topics = $topicsRepository->findAll();

        $posts = [];

        foreach ($topics as $topic)
        {
            $latestPost = $postsRepository->findOneBy(['topic'=>$topic->getId()],['date'=>'DESC']);
            $posts[] = $latestPost;
        }


        return $this->render('base.html.twig',[
            'topics'=>$topics,
            'posts'=>$posts,

        ]);
    }

    /**
     * @Route("/post_list/{id}/{page}", defaults={"page": "1"}, name="post-list")
     * @param PostsRepository $postsRepository
     * @param $id
     * @param PaginatorInterface $paginator
     * @param string $page
     * @return Response
     */
    public function postList(PostsRepository $postsRepository, $id, PaginatorInterface $paginator, string $page): Response
    {
        $posts = $postsRepository->findBy(['topic'=>$id]);
        $posts = $paginator->paginate($posts, $page, 10);


        return $this->render('forum/posts_list.html.twig',[
            'posts'=>$posts,
            'id'=>$id
        ]);
    }

    /**
     * @Route("/show_post/{topicId}/{id}/{page}", defaults={"page": "1"} ,name="show-post")
     * @param $id
     * @param PaginatorInterface $paginator
     * @return Response
     */
    public function showPost($id, $page ,PaginatorInterface $paginator, $topicId, PostsRepository $postsRepository, CommentRepository $commentRepository): Response
    {

        $post = $postsRepository
            ->find($id);

        $usr = $post->getUser()->getUsername();


        $comments = $commentRepository
            ->findBy(['post'=>$id]);

        $bbcode = new BBCodeParser;
        $postContent = $bbcode->parse($post->getContent());



        $comments = $paginator->paginate($comments, $page, 5);

        if (!$post)
        {
            throw $this->createNotFoundException("No post found, sorry");
        }


        return $this->render('forum/show_post.html.twig',[
            'user'=>$usr,
            'post'=>$post,
            'comments'=>$comments,
            'id'=>$id,
            'topicId'=>$topicId,
            'postContent'=>$postContent
        ]);
    }

    /**
     * @Route("/add_post/{id}", name="post" )
     * @param Request $request
     * @param $id
     * @param TopicsRepository $topic
     * @param UserRepository $userRepository
     * @return Response
     */
    public function post(Request $request, $id, TopicsRepository $topic, UserRepository $userRepository): Response
    {

        $post = new Posts();
        $form = $this->createForm(PostType::class, $post);
        $usr = $this->getUser();
        $topicId = $topic->find($id);
        $userId = $userRepository->find(['id'=>$this->getUser()->getId()]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $posts = $form->getData();
            if ($this->getUser())
            {
                $post->setUsername($usr->getUsername());
            }

            $post->setDate(new \DateTime());
            $post->setTopic($topicId);
            $post->setUser($userId);


            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($posts);
            $entityManager->flush();

            return $this->redirectToRoute('post-list', ['id'=> $id]);
        }

        return $this->render('forum/add_post.html.twig', [
            "form"=>$form->createView(),
        ]);
    }

    /**
     * @Route("/remove_post/{topicId}/{id}",name="remove-post")
     * @param $id
     * @param PostsRepository $postsRepository
     * @param CommentRepository $commentRepository
     * @param $topicId
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function removePost($id, PostsRepository $postsRepository, CommentRepository $commentRepository, $topicId)
    {

        $user = $this->getUser();
        $post = $postsRepository->find($id);
        $comments = $commentRepository->findBy(['post'=>$id]);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($post);

        foreach ($comments as $comment)
        {
            $entityManager->remove($comment);
        }
        $entityManager->flush();

        return $this->redirectToRoute('post-list', ["id"=>$topicId]);

    }

    /**
     * @Route("/show_profile/{userId}", name="show-profile")
     */
    public function showProfile($userId)
    {
        $user = $this->getDoctrine()
            ->getRepository(User::class)
            ->findOneBy(['id'=>$userId]);

        $posts = $this->getDoctrine()
            ->getRepository(Posts::class)
            ->findBy(['user'=>$userId]);

        $comments = $this->getDoctrine()
            ->getRepository(Comment::class)
            ->findBy(['user'=>$userId]);

        if (!$user) {
            throw $this->createNotFoundException(
                'No user found '
            );
        }

        return $this->render('forum/show_profile.html.twig', [
            "user"=>$user,
            "comments"=>$comments,
            "posts"=>$posts
        ]);
    }

    /**
     * @Route("/search_results/{page}", methods={"GET"}, defaults={"page": "1"}, name="search-results")
     * @param $page
     * @param Request $request
     * @return Response
     */
    public function searchResults($page, Request $request): Response
    {
        $posts = null;
        $query = null;

        if($query = $request->get('query'))
        {
            $posts = $this->getDoctrine()
                ->getRepository(Posts::class)
                ->findByTitle($query, $page);

            if(!$posts->getItems()) $posts = null;
        }



        return $this->render('forum/search_results.html.twig',[
            'posts' => $posts,
            'query' => $query,
        ]);
    }
}
