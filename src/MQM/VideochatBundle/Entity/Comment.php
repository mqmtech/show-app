<?php

namespace MQM\VideochatBundle\Entity;

use MQM\VideochatBundle\Model\Comment as BaseComment;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

class Comment extends BaseComment
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
