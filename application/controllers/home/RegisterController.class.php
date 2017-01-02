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
        //echo getnextIDAction();
    }

    public function getnextIDAction() {
        $registermodel = new RegisterModel("user");
        $nextUserID = $registermodel->getnextID();
        return $nextUserID;
    }

    public function registerAction() {
        $registername = $_POST['name'];
        $registerpassword = $_POST['password'];
        $registermailaddress = $_POST['email'];
        $registerage = $_POST['age'];
        $registersex = $_POST['sex'];
        $registerschool = $_POST['school'];
        $registerphonenumber = $_POST['phonenumber'];
        $registeridentify = $_POST['identify'];
        $registergrade = $_POST['grade'];
        $nextUserID = getnextIDAction();

        $registermodel = new RegisterModel("user");
        $data = $registermodel->select("mailaddress", $registermailaddress);
        if (size($data) == 0) {
            $status = "success";
            $reason = "success";
            $list = array(
                "uid" => $nextUserID,
                "uname" => $registername,
                "password" => $registerpassword,
                "sex" => $registersex,
                "age" => $registerage,
                "school" => $registerschool,
                "phonenumber" => $registerphonenumber,
                "mailaddress" => $registermailaddress,
                "identify" => $registeridentify,
                "account" => 0,
                "grade" => $registergrade
                );
            $registermodel->insert($list);
        }
        else {
            $status = "failed";
            $reason = "You have registed in the same email.";
        }

        $result = array(
            "uid" => $nextUserID,
            "status" => $status,
            "reason" => $reason
            );
        echo json_encode($result);
    }
}



?>