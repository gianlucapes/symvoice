<?php
// src/AppBundle/Controller/MainController.php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    
    public function index()
    {
       
        $session=1;
        return $this->render('page.html.twig',[
        'session' => $session]);
    }
    
}
