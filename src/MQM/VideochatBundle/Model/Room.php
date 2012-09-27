<?php

namespace MQM\VideochatBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use MQM\VideochatBundle\Model\Helper;

class Room
{
    protected $title;
    protected $slug;
    protected $createdAt;
    protected $updatedAt;
    protected $description;
    protected $tags;
    protected $owners;
    protected $category;
    protected $roomSessions;

    public function __construct()
    {
        $this->tags = new ArrayCollection();
        $this->createdAt = new \DateTime('now');
        $this->owners = new ArrayCollection();
        $this->roomSessions = new ArrayCollection();
    }

    function __toString()
    {
        return $this->getTitle();
    }


    public function setTitle($title)
    {
        $this->title = $title;
        $this->setSlug(Helper::slugify($title));
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setOwners($owners)
    {
        $this->owners = $owners;
    }

    public function getOwners()
    {
        return $this->owners;
    }

    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function setRoomSessions($roomSessions)
    {
        $this->roomSessions = $roomSessions;
    }

    public function getRoomSessions()
    {
        return $this->roomSessions;
    }
}
