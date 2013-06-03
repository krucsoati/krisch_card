<?php

namespace KrischCard\WorkshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller {
    
    public function indexAction()       { return $this->render('KrischCardWorkshopBundle:Page:layout.html.twig'); }
    
    public function contactAction()     { return $this->render('KrischCardWorkshopBundle:Page:contact.html.twig'); }
                        
    public function descriptionAction() { return $this->render('KrischCardWorkshopBundle:Page:description.html.twig'); }
    
    public function servicesAction()    { return $this->render('KrischCardWorkshopBundle:Page:services.html.twig'); }
}