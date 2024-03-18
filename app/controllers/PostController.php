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
        // $posts = Post::all();
        // $template = $this->twig->load('main/posts.twig');
        // echo $template->render(['Posts' => $posts]);

        // return $posts;
    }
    public function createForm()
    {
        include '../public/assets/main/postForm.html';
        exit();
    }
    public function savePosts()
    {

        if(isset($_POST['data']) && isset($_POST['details']))
        {
            $data = htmlspecialchars($_POST['data']);
            $details = htmlspecialchars($_POST['details']);
        
            if(!empty($data) && !empty($details))
            {
                $post = new Post();
                $post -> setName($data);
                $post->setDetails($details);

                echo json_encode(['success' => true, 'message' => 'Post has been created']);
                exit;
            }

            else
            {
                http_response_code(400);
                echo json_encode(['error' => 'Provide Name and description']);
                exit;
            }
        }
        else
        {
            http_response_code(400);
            echo json_encode(['error' => 'Data for post is missing']);
            exit;
        }


    }


}
