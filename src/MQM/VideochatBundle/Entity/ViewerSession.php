<?php

namespace MQM\VideochatBundle\Entity;

use MQM\VideochatBundle\Model\ViewerSession as BaseViewerSession;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

class ViewerSession extends BaseViewerSession
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
