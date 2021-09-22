<?php

namespace App\Controller;

use App\Entity\Client;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test")
     */
    public function index(EntityManagerInterface $em): Response
    {
        
        $cli1 = new Client();

        $cli1->setNom("Joly");
        $cli1->setPrenom("Marion");
        $cli1->setAdresse("...");

        $em->persist($cli1);

        $em->flush();

        return $this->redirect("/");
    }
}
