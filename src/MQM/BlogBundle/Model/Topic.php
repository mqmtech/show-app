<?php

namespace MQM\BlogBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use MQM\BlogBundle\Model\Helper;

class Topic
{
    protected $slug;
    protected $title;
    protected $content;
    protected $messages;
    protected $tags;
    protected $blog;
    protected $user;
    protected $createdAt;
    protected $updatedAt;

    public function __construct()
    {
        $this->messages = new ArrayCollection();
        $this->tags = new ArrayCollection();
        $this->createdAt = new \DateTime('now');
    }

    function __toString()
    {
        return $this->getTitle();
    }

    public function setBlog($blog)
    {
        $this->blog = $blog;
    }

    public function getBlog()
    {
        return $this->blog;
    }

    public function setMessages($messages)
    {
        $this->messages = $messages;
    }

    public function getMessages()
    {
        return $this->messages;
    }

    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
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

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
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

    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
