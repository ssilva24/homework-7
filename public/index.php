<?php
require_once '../app/vendor/autoload.php';
require_once "../app/core/Controller.php";
require_once "../app/models/User.php";
require_once "../app/models/Post.php";
require_once "../app/controllers/MainController.php";
require_once "../app/controllers/UserController.php";
require_once "../app/controllers/PostController.php";
// require_once "../public/assets/main/postForm.html";
// require_once "../public/assets/main/postForm.html";
use app\controllers\MainController;
use app\controllers\UserController;
use app\controllers\PostController;


$url = $_SERVER["REQUEST_URI"];

//todo add a switch statement router to route based on the url
//if it is "/posts" return an array of posts via the post controller
//if it is "/" return the homepage view from the main controller
//if it is something else return a 404 view from the main controller

switch( $url )
{
    case "/posts":
        $postController = new PostController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $postController->savePosts();
        }
        else
        {
            $posts = $postController-> index();
        }
        break;
    case "/create-post-form":
        $postController = new PostController();
        $postController->createForm();
        break;
    case "/":
        $mainController = new MainController();
        $mainController->homepage();
        break;
    //new case
    case "/save-post":
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $postController = new PostController();
            $posts = $postController->savePosts();
        }
        break;
    default:
        $mainController = new MainController();
        $mainController->notFound();
        break;
}
