<?php

class IndexController extends BaseController{

    public function mainAction(){
        include(CURR_VIEW_PATH . "main.html");
        // Load Captcha class
        // $this->loader->library("Captcha");
        // $captcha = new Captcha;
        // $captcha->hello();
        //$userModel = new UserModel("user");
        //$users = $userModel->getUsers();
    }

    public function indexAction(){
        isset($_SESSION) or session_start();
        //$userModel = new UserModel("user");
        //$users = $userModel->getUsers();
        // Load View template
        if (isset($_SESSION['uid'])) {
            include (CURR_VIEW_PATH . "main.php");
        }
        else {
            include(CURR_VIEW_PATH . "index.php");
        }
        //include(CURR_VIEW_PATH . "index.php");
    }

    public function menuAction(){
        include(CURR_VIEW_PATH . "menu.html");
    }

    public function dragAction(){
        include(CURR_VIEW_PATH . "drag.html");
    }

    public function topAction(){
        include(CURR_VIEW_PATH . "top.html");
    }
}



?>