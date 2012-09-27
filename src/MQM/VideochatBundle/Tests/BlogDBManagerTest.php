<?php

namespace MQM\VideochatBundle\Test;

use MQM\VideochatBundle\Model\VideochatDBManagerInterface;
use MQM\VideochatBundle\Model\CategoryFactory;

class CategoryDBManagerTest extends \Symfony\Bundle\FrameworkBundle\Test\WebTestCase
{   
    protected $_container;
    
    /**
     * @var VideochatDBManagerInterface
     */
    private $categoryDBManager;

    /**
     * @var CategoryFactory
     */
    private $categoryFactory;

    public function __construct()
    {
        parent::__construct();
        
        $client = static::createClient();
        $container = $client->getContainer();
        $this->_container = $container;
    }
    
    protected function setUp()
    {
        $this->categoryDBManager = $this->get('mqm_chat.db_manager');
        $this->categoryFactory = $this->get('mqm_chat.factory');
    }

    protected function tearDown()
    {
        $this->resetCategorys();
    }

    protected function get($service)
    {
        return $this->_container->get($service);
    }
    
    public function testGetAssertManager()
    {
        $this->assertNotNull($this->categoryDBManager);
    }

    public function testCreateCategory()
    {
        $category = $this->categoryFactory->createCategory();
        $this->assertNotNull($category);
        $category->setName("demo category");
        $this->categoryDBManager->persist($category);
    }

    public function testCreateRoom()
    {
        $room = $this->categoryFactory->createRoom();
        $room->setTitle("Demo room");
        $room->setContent("Demo Content");
        $room->setCategory($this->categoryDBManager->getCategory());

        $this->categoryDBManager->persist($room);
        $this->assertNotNull($room);
    }

    public function testCreateMessage()
    {
        $message = $this->categoryFactory->createMessage();
        $message->setTitle("Mi Message");
        $message->setContent("mi content");
        $message->setRoom($this->categoryDBManager->getRoom());

        $this->categoryDBManager->persist($message);
        $this->assertNotNull($message);
    }

    public function testCreateAnswer()
    {
        $message = $this->categoryFactory->createMessage();
        $message->setTitle("Mi Answer");
        $message->setContent("mi content answer");
        $room = $this->categoryDBManager->getRoom();
        $message->setRoom($room);
        $messages = $room->getMessages();
        $parent = $messages[0];
        $message->setParent($parent);

        $this->categoryDBManager->persist($message);
        $this->assertNotNull($message);
    }

    private function resetCategorys()
    {
        $categories = $this->categoryDBManager->getCategories();
        foreach ($categories as $category) {
            $this->categoryDBManager->remove($category, false);
        }
        $this->categoryDBManager->flush();
    }
}
