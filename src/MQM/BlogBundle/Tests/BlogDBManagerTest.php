<?php

namespace MQM\BlogBundle\Test;

use MQM\BlogBundle\Model\BlogDBManagerInterface;
use MQM\BlogBundle\Model\BlogFactory;

class BlogDBManagerTest extends \Symfony\Bundle\FrameworkBundle\Test\WebTestCase
{   
    protected $_container;
    
    /**
     * @var BlogDBManagerInterface
     */
    private $blogDBManager;

    /**
     * @var BlogFactory
     */
    private $blogFactory;

    public function __construct()
    {
        parent::__construct();
        
        $client = static::createClient();
        $container = $client->getContainer();
        $this->_container = $container;
    }
    
    protected function setUp()
    {
        $this->blogDBManager = $this->get('mqm_blog.db_manager');
        $this->blogFactory = $this->get('mqm_blog.factory');
    }

    protected function tearDown()
    {
        $this->resetBlogs();
    }

    protected function get($service)
    {
        return $this->_container->get($service);
    }
    
    public function testGetAssertManager()
    {
        $this->assertNotNull($this->blogDBManager);
    }

    public function testCreateBlog()
    {
        $blog = $this->blogFactory->createBlog();
        $this->assertNotNull($blog);
        $blog->setName("demo blog");
        $this->blogDBManager->persist($blog);
    }

    public function testCreateTopic()
    {
        $topic = $this->blogFactory->createTopic();
        $topic->setTitle("Demo topic");
        $topic->setContent("Demo Content");
        $topic->setBlog($this->blogDBManager->getBlog());

        $this->blogDBManager->persist($topic);
        $this->assertNotNull($topic);
    }

    public function testCreateMessage()
    {
        $message = $this->blogFactory->createMessage();
        $message->setTitle("Mi Message");
        $message->setContent("mi content");
        $message->setTopic($this->blogDBManager->getTopic());

        $this->blogDBManager->persist($message);
        $this->assertNotNull($message);
    }

    public function testCreateAnswer()
    {
        $message = $this->blogFactory->createMessage();
        $message->setTitle("Mi Answer");
        $message->setContent("mi content answer");
        $topic = $this->blogDBManager->getTopic();
        $message->setTopic($topic);
        $messages = $topic->getMessages();
        $parent = $messages[0];
        $message->setParent($parent);

        $this->blogDBManager->persist($message);
        $this->assertNotNull($message);
    }

    private function resetBlogs()
    {
        $blogs = $this->blogDBManager->getBlogs();
        foreach ($blogs as $blog) {
            $this->blogDBManager->remove($blog, false);
        }
        $this->blogDBManager->flush();
    }
}
