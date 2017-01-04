<?php

class LoginController extends BaseController {

    public function loginAction() {
        isset($_SESSION) or session_start();
        $loginmailaddress = $_POST['email'];
        $loginpassword = $_POST['password'];
        $loginmodel = new LoginModel("user");
        $password = $loginmodel->select("password", "mailaddress", $loginmailaddress);
        $uid = $loginmodel->select("uid", "mailaddress", $loginmailaddress);
        $uname = $loginmodel->select("uname", "mailaddress", $loginmailaddress);
        $identify = $loginmodel->select("identify", "mailaddress", $loginmailaddress);
        if ($uid == false) {
            echo json_encode(array("status" => "failed", "reason" => "该用户不存在"));
        }
        else if ($password == $loginpassword) {
            $_SESSION['uid'] = $uid;
            $_SESSION['uname'] = $uname;
            $_SESSION['identify'] = $identify;
            echo json_encode(array("status" => "success"));
        }
        else {
            echo json_encode(array("status" => "failed", "reason" => "密码错误，请重新输入"));
        }
    }

    public function jumpAction() {
        isset($_SESSION) or session_start();
        if ($_SESSION['identify'] == 1) {
            $this->redirect("", "main_teacher", 1);
        }
        else if ($_SESSION['identify'] == 2){
            $this->redirect("", "root", 1);
        }
        else {
            $this->redirect("", "main_student", 1);
        }
        //echo json_encode(array("status" => "success"));
    }
}







?>