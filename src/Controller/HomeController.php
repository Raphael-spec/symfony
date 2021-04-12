<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController{

     /**
     * @Route("/accueil", name="app_accueil")
     */

    public function accueil(){
        $title = "Accueil";
        $tab = ['Lundi', 'Mardi','Mercredi','Jeudi'];
        $img = "ri.jpg";
        return $this->render('home/accueil.html.twig', ['titre'=>$title, 'jours'=>$tab, 'riri'=>$img]);
    }

    /**
     * @Route("/presentation", name="app_presentation")
     */
    public function presentation(){
        return $this->render('home/presentation.html.twig', []);
    }
}