<?php

class BlogController extends BaseController {

    public function jumpAction() {
        $this->redirect("", "blog", 1);
    }

    public function getBlogAction() {
        $userid = $_SESSION['uid'];
        $blogmodel = new BlogModel("blog");
        $result = $blogmodel->getBlogbyUID($userid);
        if (count($result) > 4) {
            $result = array_slice($result, 0, 4);
        }
        echo json_encode($result);
    }
}







?>