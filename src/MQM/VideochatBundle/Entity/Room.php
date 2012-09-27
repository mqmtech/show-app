<?php

namespace MQM\VideochatBundle\Entity;

use MQM\VideochatBundle\Model\Room as BaseRoom;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

class Room extends BaseRoom
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
