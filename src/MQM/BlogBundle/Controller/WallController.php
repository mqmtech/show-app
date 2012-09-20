<?php

namespace MQM\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Acme\DemoBundle\Form\ContactType;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class WallController extends Controller
{
    /**
     * @Template()
     */
    public function showTopicsAction()
    {
        /**
         * @var \MQM\BlogBundle\Model\BlogDBManagerInterface $manager
         */
        $manager = $this->get("mqm_blog.db_manager");
        $topics = $manager->getTopics();

        return array(
            'topics' => $topics
        );
    }
}
