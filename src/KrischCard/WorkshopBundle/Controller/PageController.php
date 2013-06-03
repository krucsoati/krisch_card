<?php

namespace KrischCard\WorkshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('KrischCardWorkshopBundle:Page:layout.html.twig');
    }
}