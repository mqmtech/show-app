<?php

namespace MQM\VideochatBundle\Entity;

use MQM\VideochatBundle\Model\RoomSession as BaseRoomSession;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

class RoomSession extends BaseRoomSession
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
