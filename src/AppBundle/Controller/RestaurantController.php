<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
* @Route("/restaurant")
*/
class RestaurantController extends Controller
{
    /**
     * @Route("/rest", name="single_restaurant")
     */
    public function indexAction(Request $request)
    {

        return $this->render('restaurant/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
