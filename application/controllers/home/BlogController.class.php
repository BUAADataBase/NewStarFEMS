<?php

class BlogController extends BaseController {

    public function jumpAction() {
        if ($_SESSION['identify'] == 0) {
            $this->redirect("", "blog_student", 1);
        }
        else if ($_SESSION['identify'] == 1) {
            $this->redirect("", "blog_teacher", 1);
        }
        else {
            $this->redirect("", "blog_root", 1);
        }
    }

    public function getBlogAction() {
        $userid = $_SESSION['uid'];
        $blogmodel = new BlogModel("blog");
        $result = $blogmodel->getBlogbyUID($userid);
        $length = count($result);
        if ($length >= 4) {
            $result = array_slice($result, 0, 4);
        }
        else {
            for ($i = 0; $i < 4 - $length; $i ++) {
                $result[$length+$i] = array (
                    "uid" => $userid,
                    "uname" => $blogmodel->getNamebyUID($userid),
                    "blogid" => 0,
                    "headline" => "Come on to write new blog!",
                    "blogmessage" => "You are the best!"
                    );
            }
        }
        echo json_encode($result);
    }
}







?>