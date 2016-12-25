<?php

class News_Model {

    private $articles = array (
        'new' => array (
            'title' => 'New Webset',
            'content' => 'Welcome to the site! We are glad to have you here.'
        ),

        'MVC' => array (
            'title' => 'PHP MVC Frameworks are Awesome!',
            'content' => 'It really is very easy. Take it from us!'
        ),

        'test' => array (
            'title' => 'Testing',
            'content' => 'This is just a measly test article.'
        )
    );



    public function __construct() {
        print 'I am the news model<br/>';
    }

    public function get_article($articleName) {
        $article = $this->articles[$articleName];
        return $article;
    }
}





?>