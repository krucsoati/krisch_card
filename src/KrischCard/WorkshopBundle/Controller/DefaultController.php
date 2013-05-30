<?php

namespace KrischCard\WorkshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KrischCardWorkshopBundle:Default:index.html.twig', array('name' => $name));
    }
}
