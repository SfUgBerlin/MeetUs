<?php

namespace SfUgBln\MeetUs\IndexBundle\Controller;

use SfUgBln\Core\CoreBundle\Controller\CoreController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends CoreController
{
    /**
     * @Route("/hello")
     * @Template()
     */
    public function indexAction()
    {
        $name = 'Klaus';

        $this->getTranslator();

        return array('name' => $name);
    }
}
