<?php

namespace App\Controller;

use App\Weblitzer\Controller;

/**
 *
 */
class DefaultController extends Controller
{

    public function index()
    {
        $message = 'Bienvenue sur le framework MVC';

        // Affiche la vue
        $this->render('app.default.frontpage',[
            'message' => $message,
        ]);
    }

    /**
     *
     */
    public function Page404()
    {
        $this->render('app.default.404');
    }

}
