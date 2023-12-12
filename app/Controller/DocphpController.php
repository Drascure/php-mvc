<?php

namespace App\Controller;

use App\Weblitzer\Controller;

/**
 *
 */
class DocphpController extends Controller
{

    public function index()
    {
        

        //On indique le chemin dans le render, les . sont comme les / car il sont remplacé par la méthode render()
        $this->redirect('https://www.php.net/manual/fr/');
    }

    /**
     *
     */
    public function Page404()
    {
        $this->render('app.default.404');
    }

}
