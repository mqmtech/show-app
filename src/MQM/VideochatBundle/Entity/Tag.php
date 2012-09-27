<?php

namespace MQM\VideochatBundle\Entity;

use MQM\VideochatBundle\Model\Tag as BaseTag;
use Doctrine\ORM\Mapping as ORM;

class Tag extends BaseTag
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
