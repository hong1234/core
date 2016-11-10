<?php

namespace Foggyline\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $rs = $this->container->getParameter('test.twitter');

        var_dump($rs);

        return $this->render('FoggylineTestBundle:Default:index.html.twig');
    }
}
