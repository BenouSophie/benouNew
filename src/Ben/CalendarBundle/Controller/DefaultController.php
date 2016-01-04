<?php

namespace Ben\CalendarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BenCalendarBundle:Default:index.html.twig', array('name' => $name));
    }
}
