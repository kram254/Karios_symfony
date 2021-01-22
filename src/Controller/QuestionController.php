<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response("Welcome to Karios Gamer's world");
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf('Ask Karios about gaming and coding "%s" ',
         ucwords(str_replace('-','',$slug))
    ));
    }
}