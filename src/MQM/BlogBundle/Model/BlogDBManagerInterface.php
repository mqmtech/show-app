<?php

namespace MQM\BlogBundle\Model;

use MQM\BlogBundle\Model\BlogFactory;
use MQM\BlogBundle\Model\Blog;
use MQM\BlogBundle\Model\Topic;
use MQM\BlogBundle\Model\Message;

interface BlogDBManagerInterface
{
    public function getTopic($criteria = array());
    public function getBlog($criteria = array());
    public function getTopics($criteria = array());
    public function getBlogs($criteria = array());
    public function persist($blog, $flush = true);
    public function remove($object, $flush = true);
    public function flush();
}
