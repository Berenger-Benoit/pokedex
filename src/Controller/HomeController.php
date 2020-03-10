<?php

namespace App\Controller;

use App\Entity\Pokemon;
use App\Repository\PokemonRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(PokemonRepository $pr)
    {
        $pokemons = $pr->findAll();
        return $this->render('home/index.html.twig', [
            'pokemons' => $pokemons
        ]);
    }
}
