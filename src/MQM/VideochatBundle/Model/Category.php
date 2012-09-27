<?php

namespace MQM\VideochatBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use MQM\VideochatBundle\Model\Helper;

class Category
{
    protected $slug;
    protected $name;
    protected $rooms;
    protected $createdAt;
    protected $updatedAt;
    protected $parent;
    protected $categories;

    public function __construct()
    {
        $this->rooms = new ArrayCollection();
        $this->createdAt = new \DateTime('now');
        $this->categories = new ArrayCollection();
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

    public function setCategories($categories)
    {
        $this->categories = $categories;
    }

    public function getCategories()
    {
        return $this->categories;
    }

    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    public function getParent()
    {
        return $this->parent;
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
