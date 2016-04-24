<?php

namespace M4uBookmarkerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('M4uBookmarkerBundle:Default:index.html.twig');
    }
}
