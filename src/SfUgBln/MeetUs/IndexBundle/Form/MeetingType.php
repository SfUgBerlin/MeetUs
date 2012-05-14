<?php

namespace SfUgBln\MeetUs\IndexBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class MeetingType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('dateStart')
            ->add('dateEnd')
            ->add('name')
            ->add('description')
            ->add('isReoccuring')
        ;
    }

    public function getName()
    {
        return 'sfugbln_meetus_indexbundle_meetingtype';
    }
}
