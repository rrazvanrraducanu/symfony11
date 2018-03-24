<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Image;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="default")
     */
    public function index()
    {
        $images = $this->getDoctrine()-> getRepository(Image::class)->findAll();
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array('images'=>$images));

    }
}
