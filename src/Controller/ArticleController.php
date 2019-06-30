<?php

namespace App\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ArticleController extends AbstractController
{
  /**
   * @Route("/")
   */
  public function homepage()
  {
    # code...
    return new Response ("html page!!!!!!!!!");
  }
  /**
   * @Route("/news/{slug}")
   */
  public function show($slug)
  {
      $comments = [
          'comment one',
          'comment two',
          'comment three',
          ];
    return $this->render('article/show.html.twig',[
        "title" => ucwords(str_replace('_', ' ', $slug)),
        "comments" => $comments
    ]);
  }
  
}
