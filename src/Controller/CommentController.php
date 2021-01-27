<?php


namespace App\Controller;


use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{

    /**
     * @Route("comment/{id}/vote/{direction<up|down>}")
     */
   public function commentVote($id,$direction, LoggerInterface $logger)
   {
    //todo use id to querry database

       if($direction == up){
           $logger->info('Voting up');
           $currentVoteCount = rand(7,100);
       } else{
           $logger->info('Voting down');
           $currentVoteCount = rand(0,5);
       }
       
       //we may also use return $this=>json([])
     return new JsonResponse(['votes' => $currentVoteCount]);
   }
}