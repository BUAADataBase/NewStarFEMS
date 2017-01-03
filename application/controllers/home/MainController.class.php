<?php

class MainController extends BaseController {

    public function jumpAction() {
        if ($_SESSION['identify'] = "teacher") {
            $this->redirect("", "main_teacher", 1);
        }
        else {
            $this->redirect("", "main_student", 1);
        }
    }

    public function getnameAction() {
        echo json_encode(array("name" => $_SESSION['uname']));
    }
}







?>