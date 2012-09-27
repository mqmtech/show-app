<?php

namespace MQM\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Acme\DemoBundle\Form\ContactType;
use Symfony\Component\HttpFoundation\Response;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PublicApiController extends Controller
{
    /**
     * @Template()
     */
    public function indexAction($data)
    {
        $content = $this->getRequest()->getContent();
        return new Response($content);
    }
}
