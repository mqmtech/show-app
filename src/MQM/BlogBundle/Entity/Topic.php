<?php

namespace MQM\BlogBundle\Entity;

use MQM\BlogBundle\Model\Topic as BaseTopic;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

class Topic extends BaseTopic
{
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }


    public function preUpdate()
    {

    }

    public function prePersist()
    {
        $this->updatedAt = new \DateTime('now');
    }
}
