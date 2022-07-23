<?php
// src/Controller/ProductController.php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\MessageGenerator;
class ProductController extends AbstractController
{
    /**
     *  @Route("/lucky/number/{max}", name="app_lucky_number")
     */
   
     public function number(int $max, MessageGenerator $messageGenerator): Response
     {
        $number = random_int(0,$max);

        $message = $messageGenerator->getHappyMessage();

        return new Response(
            '<html><body> lucky number '.$message.'</body></html>'
        );
     }
  
}