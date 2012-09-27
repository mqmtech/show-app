<?php

namespace MQM\VideochatBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use MQM\VideochatBundle\Model\Helper;

class Comment
{
    protected $slug;
    protected $title;
    protected $content;
    protected $roomSession;
    protected $user;
    protected $parent;
    protected $answers;
    protected $createdAt;

    public function __construct()
    {
        $this->answers = new ArrayCollection();
        $this->createdAt = new \DateTime('now');
    }

    function __toString()
    {
        return $this->getTitle();
    }

    public function setAnswers($answers)
    {
        $this->answers = $answers;
    }

    public function getAnswers()
    {
        return $this->answers;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    public function getParent()
    {
        return $this->parent;
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

    public function setRoomSession($roomSession)
    {
        $this->roomSession = $roomSession;
    }

    public function getRoomSession()
    {
        return $this->roomSession;
    }
}
