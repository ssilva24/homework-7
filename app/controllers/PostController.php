<?php

namespace app\controllers;
use app\core\Controller;

use app\models\Post;


class PostController extends Controller
{
//todo make a method to return some posts, post objects should come from the post model class
//also need to make a twig template to show the posts *** can be found under main called posts,twig
//an example is in app/controllers/UsersController

    protected $twig;        
    public function index()
    {
        $posts = Post::all();
        $template = $this->twig->load('main/posts.twig');
        echo $template->render(['Posts' => $posts]);

        return $posts;
    }


}
