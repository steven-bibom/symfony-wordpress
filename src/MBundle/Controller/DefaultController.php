<?php

namespace MBundle\Controller;

use MBundle\Controller\BaseController;

class DefaultController extends BaseController
{
    public function indexAction()
    {
        return $this->render('MBundle:Default:index.html.twig');
    }
}
