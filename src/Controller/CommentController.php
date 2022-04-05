<?php


namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Topics;
use App\Form\CommentType;
use App\Repository\CommentRepository;
use App\Repository\PostsRepository;
use App\Repository\TopicsRepository;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class CommentController extends AbstractController
{

    /**
     * @Route("/add_comment/{topicId}/{id}", name="add-comment")
     * @param Request $request
     * @param $id
     * @param UserRepository $userRepository
     * @param PostsRepository $post
     * @return Response
     */

    public function addComment(Request $request, $id, UserRepository $userRepository, PostsRepository $post, $topicId, TopicsRepository $topic): Response
    {
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $userId = $userRepository->find(['id'=>$this->getUser()->getId()]);
        $postId = $post->find($id);
        $idTopic = $topic->find($topicId);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $comment->setPost($postId);
            $comment->setUser($userId);
            $comment->setTopic($idTopic);
            $comment->setContent($form->get('content')->getData());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('show-post', ['id'=> $id,"topicId"=>$topicId]);


        }

        return $this->render('forum/add_comment.html.twig', [
            'form'=>$form->createView()
        ]);
    }

    /**
     * @Route("/remove/comment/{topicId}/{postId}/{id}", name="remove-comment")
     */
    public function removeComment($postId, $id, $topicId)
    {
        $usr = $this->getUser()->getId();


        $comment = $this->getDoctrine()
            ->getRepository(Comment::class)
            ->findOneBy(['post'=>$postId, 'id'=>$id]);


            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($comment);
            $entityManager->flush();


            return $this->redirectToRoute("show-post", ["id"=> $postId, "topicId"=>$topicId]);


    }


}