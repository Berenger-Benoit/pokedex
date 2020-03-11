<?php

namespace App\Controller;

use App\Entity\Pokemon;
use App\Repository\PokemonRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PokemonController extends AbstractController
{
    /**
     * @Route("/pokemon/{id}", name="show", requirements={"id": "\d+"})
     */
    public function show(PokemonRepository $pr, Pokemon $pokemon)
    {
        $pokemon = $pr->find($pokemon);
        return $this->render('pokemon/single.html.twig',[
            'pokemon' => $pokemon,
        ]);
    }
}
