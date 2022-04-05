<?php

namespace App\DataFixtures;

use App\Entity\Topics;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TopicsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
      $this->loadTopics($manager);
    }

    public function loadTopics(ObjectManager $manager)
    {

        foreach ((array)$this->getTopics() as [$topic] )
        {
            $topics = new Topics();
            $topics->setTitle($topic['title']);
            $topics->setDescription($topic['description']);
            $manager->persist($topics);
        }

        $manager->flush();

    }

    public function getTopics()
    {
        [
            ['title'=>'Pomoc dla początkujących','description'=> 'Pomoc dla początkujących programistów']

        ];
    }
}
