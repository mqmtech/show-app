<?php

namespace MQM\BlogBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use MQM\BlogBundle\Model\Helper;

class Tag
{
    protected $slug;
    protected $name;
    protected $topics;
    protected $createdAt;

    public function __construct()
    {
        $this->topics = new ArrayCollection();
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

    public function setTopics($topics)
    {
        $this->topics = $topics;
    }

    public function getTopics()
    {
        return $this->topics;
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
