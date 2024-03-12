<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Post;

class MainController extends Controller
{
    protected $twig;

    public function homepage()
    {
        $template = $this->twig->load('main/homepage.twig');
        $homepageData = [
            'title' => 'Homepage Title',
        ];

        echo $template->render($homepageData);
    }

    public function notFound() {
        //todo create a 404 twig template in app/public/assets/views  -- ****can be found in main
        //an example is in app/controllers/UsersController
        //and return it from this method
        $template = $this->twig->load('main/errors.twig');
        $errordata = [
            'title'=> 'This page cannot be found',
            'error code' => 404
            ];
        
        echo $template->render($errordata);

    }

}