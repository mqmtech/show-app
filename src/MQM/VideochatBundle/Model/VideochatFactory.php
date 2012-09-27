<?php

namespace MQM\VideochatBundle\Model;

class VideochatFactory
{
    protected $categoryClass;
    protected $roomClass;
    protected $messageClass;

    function __construct($categoryClass, $roomClass, $messageClass)
    {
        $this->categoryClass = $categoryClass;
        $this->roomClass = $roomClass;
        $this->messageClass = $messageClass;
    }

    /**
     * @return Category
     */
    public function createCategory()
    {
        return new $this->categoryClass();
    }

    /**
     * @return Room
     */
    public function createRoom()
    {
        return new $this->roomClass();
    }

    /**
     * @return Message
     */
    public function createMessage()
    {
        return new $this->messageClass();
    }

    public function getCategoryClass()
    {
        return $this->categoryClass;
    }

    public function getMessageClass()
    {
        return $this->messageClass;
    }

    public function getRoomClass()
    {
        return $this->roomClass;
    }
}
