<?php

namespace App\Controllers;

use App\Models\User;

class HomeController extends Controller
{

    public function index($request, $response)
    {
        $data = User::getAllUser();
        echo $data;
        var_dump($_COOKIE);
        return $this->view->render($response, 'home.twig', [
            'data' => $data
        ]);

    }

}
