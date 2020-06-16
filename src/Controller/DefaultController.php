<?php declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    /**
     * @Route("/",name="index")
     */
    public function index()
    {
        echo "Index action";
    }
    /**
     * @Route("/hello",name="hello")
     */
    public function hello()
    {
        echo "Hello action";
    }
}