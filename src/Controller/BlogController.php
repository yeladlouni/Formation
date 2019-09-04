<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog/{!page}", name="blog_list", requirements={"page"="\d+"})
     */
    public function list(int $page = 1)
    {
        return $this->render('blog/list.html.twig', [
            'page' => $page,
        ]);
    }

    /**
     * @Route("/blog/{slug}", name="blog_show")
     */
    /*public function show(BlogPost $post)
    {

    }*/

    /**
     * @Route(
     *     "/articles/{_locale}/search.{format}",
     *     locale="en",
     *     format="html",
     *     requirements={
     *          "_locale": "en|fr",
     *          "_format": "html|xml",
     *     }
     * )
     */
    public function search()
    {

    }

    /**
     * @Route("/blog/{page}", name="blog_index", defaults={"page": 1, "title": "Hello World!"})
     */
    public function index(int $page, string $title)
    {

    }
}