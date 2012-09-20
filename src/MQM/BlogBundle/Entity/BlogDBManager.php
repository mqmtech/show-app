<?php

namespace MQM\BlogBundle\Entity;

use MQM\BlogBundle\Model\BlogDBManagerInterface;
use MQM\BlogBundle\Model\BlogFactory;
use Doctrine\ORM\EntityManager;

class BlogDBManager implements BlogDBManagerInterface
{
    protected $blogFactory;
    protected $em;

    function __construct(BlogFactory $factory, EntityManager $em)
    {
        $this->blogFactory = $factory;
        $this->em = $em;

    }

    public function getBlog($criteria = array())
    {
        $class = $this->blogFactory->getBlogClass();

        return $this->findOneBy($class, $criteria);
    }

    public function getTopic($criteria = array())
    {
        $class = $this->blogFactory->getTopicClass();

        return $this->findOneBy($class, $criteria);
    }

    public function getBlogs($criteria = array())
    {
        $class = $this->blogFactory->getBlogClass();

        return $this->findBy($class, $criteria);
    }

    public function getTopics($criteria = array())
    {
        $class = $this->blogFactory->getTopicClass();

        return $this->findBy($class, $criteria);
    }

    public function persist($object, $flush = true)
    {
        $this->em->persist($object);
        if ($flush) {
            $this->flush();
        }
    }

    public function remove($object, $flush = true)
    {
        $this->em->remove($object);
        if ($flush) {
            $this->flush();
        }
    }

    public function flush()
    {
        $this->em->flush();
    }

    protected function findBy($class, $criteria = array()){
        $repository = $this->em->getRepository($class);

        return $repository->findBy($criteria);
    }

    protected  function findOneBy($class, $criteria = array()){
        $repository = $this->em->getRepository($class);

        return $repository->findOneBy($criteria);
    }
}
