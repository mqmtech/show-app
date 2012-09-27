<?php

namespace MQM\VideochatBundle\Entity;

use MQM\VideochatBundle\Model\VideochatDBManagerInterface;
use MQM\VideochatBundle\Model\VideochatFactory;
use Doctrine\ORM\EntityManager;

class VideochatDBManager implements VideochatDBManagerInterface
{
    protected $categoryFactory;
    protected $em;

    function __construct(VideochatFactory $factory, EntityManager $em)
    {
        $this->categoryFactory = $factory;
        $this->em = $em;

    }

    public function getCategory($criteria = array())
    {
        $class = $this->categoryFactory->getCategoryClass();

        return $this->findOneBy($class, $criteria);
    }

    public function getRoom($criteria = array())
    {
        $class = $this->categoryFactory->getRoomClass();

        return $this->findOneBy($class, $criteria);
    }

    public function getCategories($criteria = array())
    {
        $class = $this->categoryFactory->getCategoryClass();

        return $this->findBy($class, $criteria);
    }

    public function getRooms($criteria = array())
    {
        $class = $this->categoryFactory->getRoomClass();

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
