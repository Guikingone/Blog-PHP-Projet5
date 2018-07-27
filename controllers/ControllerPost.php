<?php

require_once('views/View.php');

class ControllerPost
{
    private $_postManager;
    private $_view;

    public function __construct($url)
    {
        if(isset($url) && count($url)>1)
        {
            throw new Exception("Page introuvable");
        }
        else
        {
            $this->posts();
        }
    }

    private function posts()
    {
        if(isset($_GET['id']) && $_GET['id']>0)
        {
            $id = htmlspecialchars($_GET['id']);
            $this->_postManager = new PostManager;
            $post = $this->_postManager->getPost($id);
            $this->_view = new View('Post');
            $this->_view->generate(array('post'=>$post));
        }
        else
        {
            throw new Exception('Identifiant d\'article incorrect');
        }
        
    }
}