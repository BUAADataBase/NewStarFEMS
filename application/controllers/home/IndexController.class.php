<?php

class IndexController extends BaseController{

    public function mainAction(){
        include(CURR_VIEW_PATH . "main.php");
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
            if ($_SESSION['identify'] == "teacher") {
                include (CURR_VIEW_PATH . "main_teacher.php");
            }
            else {
                include (CURR_VIEW_PATH . "main_student.php");
            }
        }
        else {
            include(CURR_VIEW_PATH . "index.php");
        }
        //include(CURR_VIEW_PATH . "index.php");
    }

    public function menuAction(){
        include(CURR_VIEW_PATH . "menu.php");
    }

    public function dragAction(){
        include(CURR_VIEW_PATH . "drag.php");
    }

    public function topAction(){
        include(CURR_VIEW_PATH . "top.php");
    }
}



?>