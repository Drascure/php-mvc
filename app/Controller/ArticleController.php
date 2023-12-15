<?php

namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\PostModel;
use App\Model\UserModel;

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

    public function show($id)
    {
        $article = PostModel::findById($id);
        $user = new UserModel;

        $this->render('app.article.show',
        [
            'article' => $article,
            'user' => $user,
        ]);
    }

    public function delete($id)
    {
        // PostModel::delete($id);
        $this->redirect('articles');
    }

}