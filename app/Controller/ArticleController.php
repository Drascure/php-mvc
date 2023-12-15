<?php

namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\PostModel;
use App\Model\UserModel;
use App\Service\Form;
use App\Service\Validation;

/**
 *
 */
class ArticleController extends Controller
{

    public function index()
    {

        $articles = PostModel::all();
        $user = new UserModel;
        $nbArticles = PostModel::count();


        $this->render('app.article.index',
        [
            'articles' => $articles,
            'user' => $user,
            'nbArticles' => $nbArticles
        ]);
    }

    public function add()
    {
        $errors = [];

        //Test validation formulaire
        if(!empty($_POST["submitted"])):
            // $this->dd($_POST);
            $postArticle = $this->cleanXss($_POST);

            $validerarticle = new Validation;

            $errors["titre"] = $validerarticle->textValid($postArticle["titre"], "titre", 2, 50);
            $errors["contenu"] = $validerarticle->textValid($postArticle["contenu"], "contenu", 5, 100);

            if($validerarticle->IsValid($errors)):
                //Insertion des données du formulaire dans la bdd
                PostModel::insert($postArticle);
                $this->redirect('articles');
            endif;
        endif;

        $formAdd = new Form($errors);
        $users = UserModel::all();

        $this->render('app.article.addarticle',
    [
        'formAdd' => $formAdd,
        'users' => $users,
    ]);
    }

    public function show($id)
    {
        $article = $this->isArticleExist($id);
        $user = new UserModel;

        $this->render('app.article.show',
        [
            'article' => $article,
            'user' => $user,
        ]);
    }

    public function delete($id)
    {
        $articleDelete = $this->isArticleExist($id);
        PostModel::delete($id);
        $this->redirect('articles');
    }

    public function isArticleExist($id)
    {
        $article = PostModel::findById($id);
        
        return (empty($article))? $this->Abort404() : $article; 
    }

}