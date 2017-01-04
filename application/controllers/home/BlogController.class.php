<?php

class BlogController extends BaseController {

    public function jumpAction() {
        $this->redirect("", "blog", 1);
    }

    public function getBlogAction() {
        $userid = $_SESSION['uid'];
        $blogmodel = new BlogModel("blog");
        $result = $blogmodel->getBlogbyUID($userid);
        if (count($result) >= 4) {
            $result = array_slice($result, 0, 4);
        }
        else {
            for ($i = 0; $i < 4 - count($result); $i ++) {
                $result[] = array (
                    "uid" => $userid,
                    "uname" => $blogmodel->getNamebyUID(),
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