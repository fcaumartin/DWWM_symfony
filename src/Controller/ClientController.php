<?php

namespace App\Controller;

use App\Repository\ClientRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     * @Route("/", name="home2")
     */
    public function home(): Response
    {
        return $this->render('client/index.html.twig', [
            
        ]);
    }

    /**
     * @Route("/client", name="client")
     */
    public function client(ClientRepository $repo): Response
    {
        $clients = $repo->findAll();

        // dd($clients);

        return $this->render('client/client.html.twig', [
            'clients' => $clients
        ]);
    }

    
}
