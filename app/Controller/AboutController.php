<?php

namespace App\Controller;

use App\Weblitzer\Controller;

/**
 *
 */
class AboutController extends Controller
{

    public function index()
    {
        $titreAbout = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas beatae at, nam assumenda ab tempora eaque, perferendis velit modi in impedit hic vitae ad non perspiciatis a ut molestiae delectus.';

        //On indique le chemin dans le render, les . sont comme les / car il sont remplacé par la méthode render()
        $this->render('app.about.index',[
            'titreAbout' => $titreAbout
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
