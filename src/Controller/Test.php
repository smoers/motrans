<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Test extends  AbstractController
{
    /**
     * @Route("/test", methods={"GET"})
     */
    public function testing()
    {
        return new Response('<html><body>Testing page</body></html>');
    }

}