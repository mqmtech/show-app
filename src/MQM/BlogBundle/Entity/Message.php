<?php

namespace MQM\BlogBundle\Entity;

use MQM\BlogBundle\Model\Message as BaseMessage;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

class Message extends BaseMessage
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
}
