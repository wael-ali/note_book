<?php

namespace App\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ArticleController extends AbstractController
{
  /**
   * @Route("/", name="app_homepage")
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
        "comments" => $comments,
        "slug" => $slug
    ]);
  }

  /**
   * @Route("/news/{slug}/heart", name="article_toggle_heart", methods={"POST"})
   *
   */
  public function toggleArticleHeart($slug)
  {
    return $this->json(['heart' => rand(5, 100)]);
  }
  
}
