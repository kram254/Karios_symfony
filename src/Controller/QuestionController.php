<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */

    public function homepage()
    {
        return new Response("Welcome to Karios world");
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug)
    {
        $answers = [
            'Lifes hard but keep on praying and working on it',
            'God will always ba listening and watching',
            'im gonna make it and be great one day in Jesus Name',
            'Amen 🙏🏽🙏🏽🙏🏽'
        ];
        return $this->render('question/show.html.twig',[
            'question'=>ucwords(str_replace('-','',$slug)),
            'answers'=>$answers,
        ]);
    }
}