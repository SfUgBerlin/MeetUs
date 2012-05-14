<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    public function indexAction()
    {
 //       return array( 'count' => 5 );
        return $this->render('AcmeDemoBundle:Welcome:index.html.twig', array('count'=>5) );
    }
}
