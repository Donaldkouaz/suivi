<?php

namespace Suivi\EcoleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SuiviEcoleBundle:Default:index.html.twig');
    }
}
