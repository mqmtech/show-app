<?php

namespace MQM\BlogBundle\Entity;

use MQM\BlogBundle\Model\Blog as BaseBlog;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

class Blog extends BaseBlog
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
