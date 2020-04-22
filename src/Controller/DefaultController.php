<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index()
    {
        return new Response(
            '<html><body>Hello world, welcome to SF5</body></html>'
        );
    }
}