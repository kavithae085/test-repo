<?php

class Controller_Home
{

    private $t;
    
    function __construct($__labels)
    {
        $this->t = new MyView('../app/templates/home/');
        $this->t->page = 'home';
        $this->t->meta_tags = array(
            'title' => "Welcome to " . PROJECT_NAME,
            'description' => "welcome to " . PROJECT_NAME,
            'keywords' => PROJECT_NAME,
            'shareURL' => ''
        );
        $this->t->breadcrumbs = array();
        //header("X-Frame-Options: SAMEORIGIN");
        //set_page_cache_headers(5);
    }

    function __destruct()
    {
        
    }

    public function index()
    {
        $this->t->render('index.phtml');
    }


    public function error404(){
        p('Page not found');
    }
}
