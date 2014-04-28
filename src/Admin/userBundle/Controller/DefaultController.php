<?php

namespace Admin\userBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdminuserBundle:Default:index.html.twig');
    }
}
