<?php

namespace MQM\VideochatBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use MQM\VideochatBundle\Model\Helper;

class Tag
{
    protected $slug;
    protected $name;
    protected $createdAt;
    protected $rooms;

    public function __construct()
    {
        $this->rooms = new ArrayCollection();
        $this->createdAt = new \DateTime('now');
    }

    function __toString()
    {
        return $this->getName();
    }

    public function setName($name)
    {
        $this->name = $name;
        $this->setSlug(Helper::slugify($name));
    }

    public function getName()
    {
        return $this->name;
    }

    public function setRooms($rooms)
    {
        $this->rooms = $rooms;
    }

    public function getRooms()
    {
        return $this->rooms;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    public function getSlug()
    {
        return $this->slug;
    }
}
