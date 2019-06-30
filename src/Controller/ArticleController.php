<?php

namespace App\Controller;
 
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ArticleController
{
  /**
   * @Route("/")
   */
  public function homepage()
  {
    # code...
    return new Response ("html page!!!!!!!!!");
  }
  
}
