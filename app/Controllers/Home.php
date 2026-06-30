<?php

declare(strict_types=1);

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return service('twig')->render('page/home.twig', [
            'title' => 'Imprimerie Bordeaux – Korus Imprimerie',
            'meta_description' => 'Korus Imprimerie, votre imprimerie traditionnelle à Bordeaux.',
        ]);
    }
}
