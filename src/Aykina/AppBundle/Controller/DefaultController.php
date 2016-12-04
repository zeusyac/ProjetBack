<?php

namespace Aykina\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AykinaAppBundle:Default:index.html.twig');
    }
}
