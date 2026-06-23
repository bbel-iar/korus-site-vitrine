<?php

namespace App\Controllers;

class Home extends BaseController
{
public function index()
{
    $twig = service('twig');

    return $twig->render('home.twig', [
        'title' => 'Accueil',
    ]);
}
}
