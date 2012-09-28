<?php

namespace MQM\VideochatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Acme\DemoBundle\Form\ContactType;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class VideochatController extends Controller
{
    /**
 * @Template()
 */
    public function publisherRoomSessionAction()
    {
        /**
         * @var \MQM\VideochatBundle\Model\VideochatDBManagerInterface $manager
         */
        $manager = $this->get("mqm_chat.db_manager");
        $rooms = $manager->getRooms();

        return array(
            'rooms' => $rooms
        );
    }

    /**
     * @Template()
     */
    public function viewerRoomSessionAction()
    {
        /**
         * @var \MQM\VideochatBundle\Model\VideochatDBManagerInterface $manager
         */
        $manager = $this->get("mqm_chat.db_manager");
        $rooms = $manager->getRooms();

        return array(
            'rooms' => $rooms
        );
    }
}
