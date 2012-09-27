<?php

namespace MQM\VideochatBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use MQM\VideochatBundle\Model\Helper;
use MQM\VideochatBundle\Model\Room;
use FOS\UserBundle\Model\UserInterface;

class RoomSession
{
    protected $slug;
    protected $room;
    protected $createdAt;
    protected $updatedAt;
    protected $viewerSessions;
    protected $comments;
    protected $host;

    public function __construct()
    {
        $randomSlug = sha1(uniqid(mt_rand(), true)).'.room_session';
        $this->setSlug($randomSlug);
        $this->comments = new ArrayCollection();
        $this->createdAt = new \DateTime('now');
        $this->viewerSessions = new ArrayCollection();
    }

    function __toString()
    {
        return $this->getTitle();
    }

    public function getTitle()
    {
        if ($this->getRoom() != null) {
            return $this->getRoom()->getTitle();
        }
        else {
            return $this->getSlug();
        }
    }

    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    public function getComments()
    {
        return $this->comments;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setHost(UserInterface $host)
    {
        $this->host = $host;
    }

    public function getHost()
    {
        return $this->host;
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

    public function setViewerSessions($viewerSessions)
    {
        $this->viewerSessions = $viewerSessions;
    }

    public function getViewerSessions()
    {
        return $this->viewerSessions;
    }

    public function setRoom(Room $room)
    {
        $this->room = $room;
        $this->setSlug($room->getSlug());
    }

    public function getRoom()
    {
        return $this->room;
    }
}
