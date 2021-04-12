<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController{

    /**
     * @Route("/", name="app_index")
     */

    public function index(){
        return new Response("Hello world");
    }

    
    /**
     * @Route("/hello", name="app_hello")
     */
    public function greeting(){

        return new Response("<h1>I'm greeting you</h1>");

    }

    /**
     * @Route("product/{id?}", name="app_product_item", requirements={"id"="\d{1,3}"}, defaults={"nom":"lait"}) 
     * //Avec le ? le parametre est optionnel
     */
    //  ("product/{id?}/{nom?}" ,name="app_product_item", requirements={"id"="\d{2,3}"}, defaults={"nom":"lait"}) c'est comme ca qu'on doit faire pour mettre un nom au hasard comme id et ? devant pour ignaler que ce n'est pas obligatoire
    public function getProducts( $id, $nom){

        return new Response("Produit de N°".$id." et son nom: ".$nom);
    }


    /**
     * @Route("/data/{name}", name="app_data", methods={"GET"})
     */
    public function getData(Request $request){
        $n = $request->get("name");// c'est la paremetre qui est inscrit dans le router qui permet de recuperer l'info.On met GET parce quon veut recuperer l'info dans l'url. Avec Post ca ne fonctionne pas
        return new Response($n);

    }
}