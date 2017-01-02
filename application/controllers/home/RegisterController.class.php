<?php

class RegisterController extends BaseController{
    public function judgeAction() {
        isset($_SESSION) or session_start();
        if (!isset($_SESSION['uid'])) {
            echo json_encode(array("status" => "success"));
        }
        else {
            echo json_encode(array("status" => "failed"));
        }
    }

    public function jumpAction() {
        $this->redirect("", "register", 1);
    }
}



?>