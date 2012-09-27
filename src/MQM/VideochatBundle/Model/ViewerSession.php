<?php

namespace MQM\VideochatBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use MQM\VideochatBundle\Model\Helper;
use FOS\UserBundle\Model\UserInterface;

class ViewerSession
{
    protected $slug;
    protected $name;
    protected $createdAt;
    protected $updatedAt;
    protected $endedAt;
    protected $user;
    protected $roomSession;

    public function __construct()
    {
        $this->createdAt = new \DateTime('now');
    }

    function __toString()
    {
        return "Room: " . $this->roomSession->getTitle() . ", User: " . $this->user->getUsername();
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

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setEndedAt($endedAt)
    {
        $this->endedAt = $endedAt;
    }

    public function getEndedAt()
    {
        return $this->endedAt;
    }

    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function setUser(UserInterface $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setRoomSession($roomSession)
    {
        $this->roomSession = $roomSession;
    }

    public function getRoomSession()
    {
        return $this->roomSession;
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
