<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/",name="home")   
     */
    public function homepage()
    {
       ///return new Response('Mi primera pagina');   
       //dump($this); ó dd($this);
       return $this->render('home/home.html.twig');  
    }
}