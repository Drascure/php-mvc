<?php 
namespace App\Model;

use App\Weblitzer\Model as ModelMVC; //alias
use App\Weblitzer\Database as DatabaseMVC;
use App\App;

class PostModel extends ModelMVC
{
    protected static $table = 'post';

    public static function insert($post)
    {
        App::getDatabase()->prepareInsert(
            'INSERT INTO '.self::$table.' (title, content, author) VALUES (?,?,?)', 
            [
                $post['titre'], 
                $post['contenu'],
                $post['auteur']
            ]
        );
    }
}