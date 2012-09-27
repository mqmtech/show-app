<?php

namespace MQM\VideochatBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Show\ShowMapper;
use Knp\Menu\ItemInterface as MenuItemInterface;

class RoomSessionAdmin extends Admin
{
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->addIdentifier('slug')
            ->add('host')
            ->add('room')
            ->add('createdAt')
            ->add('modifiedAt')
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('room', 'sonata_type_model', array(
                'by_reference' => false,
                'multiple' => false,
            ))
            ->add('host', 'sonata_type_model', array(
            'by_reference' => false,
            'multiple' => false,
            ))
            ->add('comments', 'sonata_type_model', array(
                'by_reference' => false,
                'expanded' => true,
                'multiple' => true,
            ))
        ;
    }

    protected function configureSideMenu(MenuItemInterface $menu, $action, Admin $childAdmin = null)
    {
        if (!$childAdmin && !in_array($action, array('edit'))) {
            return;
        }

        $admin = $this->isChild() ? $this->getParent() : $this;

        $id = $admin->getRequest()->get('id');

        $menu->addChild(
            $this->trans('side_menu_room_edit', array(), 'MQMVideochatBundle'),
            array('uri' => $admin->generateUrl('edit', array('id' => $id)))
        );
    }

    public function validate(ErrorElement $errorElement, $object)
    {
        $errorElement
            ->with('title')
                ->assertMaxLength(array('limit' => 32))
            ->end()
        ;
    }
}
