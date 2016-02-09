<?php

namespace Ben\CircleOfTrustBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BenCircleOfTrustBundle:Default:index.html.twig');
    }
}
