<?php

namespace app\models;

class Post
{
    private $data;
    private $details;
        public static function all()
        {
            return 
            [
                ['id' => 1, 'title' => 'Post 1', 'content' => 'post1 content'],
                ['id' => 2, 'title' => 'Post 2', 'content' => 'post2 content'],
            ];
        }

    public function setName($data)
    {
        $this->data = $data;
    }

    public function setDetails($details)
    {
        $this->details = $details;
    }
}
