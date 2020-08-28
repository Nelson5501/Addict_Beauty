<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Catalogue extends AbstractController
{
    /**
     * @Route("/catalogue", name="catalogue")
     */
    public function index()
    {
        return $this->render('catalogue.html.twig', [
            'controller_name' => 'Catalogue',
        ]);
    }
}
