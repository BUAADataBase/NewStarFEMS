<?php

class LoginController extends BaseController {
    public function loginAction() {
        $loginmailaddress = $_POST['email'];
        $loginpassword = $_POST['password'];
        $loginmodel = new LoginModel("user");
        $password = $loginmodel->select("password", "mailaddress", $loginmailaddress);
        $uid = $loginmodel->select("uid", "mailaddress", $loginmailaddress);
        $uname = $loginmodel->select("uname", "mailaddress", $loginmailaddress);
        $identify = $loginmodel->select("identify", "mailaddress", $loginmailaddress);
        if ($password == $loginpassword) {
            $_SESSION['uid'] = $uid;
            $_SESSION['uname'] = $uname;
            $_SESSION['identify'] = $identify;
            echo json_encode(array("status" => "success"));
        }
        else {
            echo json_encode(array("status" => "failed"));
        }
    }

    public function jumpAction() {
        if ($_SESSION['identify'] = "teacher") {
            $this->redirect("", "main_teacher", 1);
        }
        else {
            $this->redirect("", "main_student", 1);
        }
    }
}







?>