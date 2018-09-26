<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/home", name="home")
     */
    public function homeAction()
    {
        $restaurants = $this->get('doctrine_mongodb')->getManager()->getRepository('AppBundle:Restaurant')->findTenOrderedByGrade();
        $allRestaurants = $this->get('doctrine_mongodb')->getManager()->getRepository('AppBundle:Restaurant')->findAll();

        $grades = [];
        $scores = [];
        $countGrade = [];

        foreach ($allRestaurants as $restaurant) {

            $grade = $restaurant->getGrade();
            $score = $restaurant->getScore();

            if (!in_array($score, $scores)) {
                $scores[] = $score;
                $countScore[$score] = $score;
                $countScore["count " . $score] = $this->get('doctrine_mongodb')->getManager()->getRepository('AppBundle:Restaurant')->countScore($score);
            }
            if (!in_array($grade, $grades)) {
                $grades[] = $grade;
                $countGrade[$grade] = $grade;
                $countGrade["count " . $grade] = $this->get('doctrine_mongodb')->getManager()->getRepository('AppBundle:Restaurant')->countGrade($grade);
            }
        }

        return $this->render('default/home.html.twig', [
            'restaurants' => $restaurants,
            'countGrade' => $countGrade,
            'countScore' => $countScore,
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

}
