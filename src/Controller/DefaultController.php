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
     * @Route("/", name="app_hello")
     */
    public function greeting(){

        return new Response("<h1>I'm greeting you</h1>");

    }

    /**
     * @Route("product/{id?}", name="app_product_item", requirements={"id"="\d{1,3}"}, defaults={"nom":"lait"}) 
     * //Avec le ? le parametre est optionnel
     */
    public function getProducts( $id, $nom){

        return new Response("Produit de N°".$id." et son nom: ".$nom);
    }


    /**
     * @Route("/data/{name}", name="app_data", methods={"GET"})
     */
    public function getData(Request $request){
        $n = $request->get("name");
        return new Response($n);

    }
}