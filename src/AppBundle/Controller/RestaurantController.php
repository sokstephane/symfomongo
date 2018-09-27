<?php

namespace AppBundle\Controller;

use AppBundle\Document\Restaurant;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * Class RestaurantController
 * @package AppBundle\Controller
 * @Route("/restaurant")
 */
class RestaurantController extends Controller
{
    /**
     * @Route("/{id}", name="single_restaurant")
     */
    public function indexAction(Request $request, $id)
    {

        $restaurant = $this->get('doctrine_mongodb')->getManager()->getRepository('AppBundle:Restaurant')->findById($id);

        return $this->render('restaurant/index.html.twig', [
            'restaurant' => $restaurant,
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
