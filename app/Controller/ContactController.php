<?php

namespace App\Controller;

use App\Weblitzer\Controller;

/**
 *
 */
class ContactController extends Controller
{

    public function index()
    {
        $titreContact = 'Bienvenue sur la page contact';

        $persons = [
            'nom' => 'Doe',
            'prenom' => 'Jane',
            'age' => 45
        ];

        //On indique le chemin dans le render, les . sont comme les / car il sont remplacé par la méthode render()
        $this->render('app.contact.index',[
            'titrePage' => $titreContact,
            'persons' => $persons
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
