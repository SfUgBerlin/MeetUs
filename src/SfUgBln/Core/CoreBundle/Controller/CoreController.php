<?php

namespace SfUgBln\Core\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Bundle\FrameworkBundle\Translation\Translator;

class CoreController extends Controller
{

    /**
     * @return Translator $translator
     */
    public function getTranslator()
    {
        return $this->get('translator');
    }
}
