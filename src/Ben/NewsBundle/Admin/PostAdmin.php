<?php
namespace Ben\NewsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Ben\CircleOfTrustBundle\Entity\User;


class PostAdmin extends Admin
{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('user', 'sonata_type_model');
        $formMapper->add('title', 'text');
        $formMapper->add('content', 'textarea');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('title');
        $datagridMapper->add('content');

    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('title');
        $listMapper->addIdentifier('content');

    }
}