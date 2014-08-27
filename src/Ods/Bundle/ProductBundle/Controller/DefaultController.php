<?php

namespace Ods\Bundle\ProductBundle\Controller;

use Ods\Bundle\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello1/{name}")
     * @Secure(roles="ROLE_ADMIN")
     * @Template()
     */
    public function indexAction($name)
    {

        $em = $this->get('doctrine')->getManager();


        $user  = new User();
        $user  ->setFirstname('DUBUFFET')
                ->setLastname('Thibault')
                ->setPassword('6sq5d47df6456qz54dq6s5d4')
                ->setSalt("qsdqsdqsdqs5d4654654")
                ->setMail('dubuffet.thibault@gmail.com')
                ->setArea(59)
                ->setLang('FR');

        $em->persist($user);
        $em->flush();

        var_dump($user);
        return array('name' => $name);
    }
}
