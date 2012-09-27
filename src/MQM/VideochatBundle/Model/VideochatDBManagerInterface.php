<?php

namespace MQM\VideochatBundle\Model;

use MQM\VideochatBundle\Model\CategoryFactory;
use MQM\VideochatBundle\Model\Category;
use MQM\VideochatBundle\Model\Room;
use MQM\VideochatBundle\Model\Message;

interface VideochatDBManagerInterface
{
    public function getRoom($criteria = array());
    public function getCategory($criteria = array());
    public function getRooms($criteria = array());
    public function getCategories($criteria = array());
    public function persist($category, $flush = true);
    public function remove($object, $flush = true);
    public function flush();
}
