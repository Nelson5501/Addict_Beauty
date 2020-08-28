<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Biographie extends AbstractController
{
    /**
     * @Route("/bio", name="biographie")
     */
    public function index()
    {
        return $this->render('bio.html.twig', [
            'controller_name' => 'Biographie',
        ]);
    }
}
