<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 6/4/18
 * Time: 9:32 AM
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder,  array $options)

    {
        $builder->add('firstName');
        $builder->add('lastName');
        $builder->add('phoneNumber');
        $builder->add('birthDate', BirthdayType::class, array('data' => new \DateTime('now')));
        $builder->add('isACertifiedPilot');
    }

    public function getParent()

    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()

    {
        return 'app_user_registration';
    }

    public function getName()

    {
        return $this->getBlockPrefix();
    }
}