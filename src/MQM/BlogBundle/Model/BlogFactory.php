<?php

namespace MQM\BlogBundle\Model;

class BlogFactory
{
    protected $blogClass;
    protected $topicClass;
    protected $messageClass;

    function __construct($blocClass, $topicClass, $messageClass)
    {
        $this->blogClass = $blocClass;
        $this->topicClass = $topicClass;
        $this->messageClass = $messageClass;
    }

    /**
     * @return Blog
     */
    public function createBlog()
    {
        return new $this->blogClass();
    }

    /**
     * @return Topic
     */
    public function createTopic()
    {
        return new $this->topicClass();
    }

    /**
     * @return Message
     */
    public function createMessage()
    {
        return new $this->messageClass();
    }

    public function getBlogClass()
    {
        return $this->blogClass;
    }

    public function getMessageClass()
    {
        return $this->messageClass;
    }

    public function getTopicClass()
    {
        return $this->topicClass;
    }
}
