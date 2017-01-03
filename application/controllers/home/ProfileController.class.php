<?php

class ProfileController extends BaseController {

    public function jumpAction() {
        isset($_SESSION) or session_start();
        if ($_SESSION['identify'] == 0) {
            $this->redirect("", "student_profile", 1);
        }
        else {
            $this->redirect("", "teacher_profile", 1);
        }
    }


    public function editStudentProfileAction() {
        $uid = $_SESSION['uid'];
        $uname = $_POST['uname'];
        $age = $_POST['age'];
        $grade = $_POST['grade'];
        $school = $_POST['school'];
        $phonenumber = $_POST['tel'];
        $weakcourse = $_POST['weakcourse'];
        $profile = $_POST['profile'];
        $pw_identify = $_POST['pw_identify'];
        $course_identify = $_POST['course_identify'];
        $oldpassword = $_POST['old_password'];
        $newpassword = $_POST['new_password'];
        $usermodel = new ProfileModel("user");
        $profilemodel = new ProfileModel("profile");
        if ($uname != "") {
            $_SESSION['uname'] = $uname;
            $usermodel->edit("uname", $uname, $uid);
        }
        if ($age != "") {
            $age = (int)$age;
            $usermodel->edit("age", $age, $uid);
        }
        if ($grade != "") {
            $usermodel->edit("grade", $grade, $uid);
        }
        if ($school != "") {
            $usermodel->edit("school", $school, $uid);
        }
        if ($phonenumber != "") {
            $usermodel->edit("phonenumber", $phonenumber, $uid);
        }
        if ($course_identify == 1) {
            if ($profilemodel->selectbyUID($uid)) {
                $profilemodel->edit("courses", $weakcourse, $uid);
            }
            else {
                $profilemodel->insert(array("uid" => $uid, "courses" => $weakcourse));
            }
        }
        if ($profile != "") {
            if ($profilemodel->selectbyUID($uid)) {
                $profilemodel->edit("introduction", $profile, $uid);
            }
            else {
                $profilemodel->insert(array("uid" => $uid, "profile" => $profile));
            }
        }
        if ($pw_identify == 1) {
            $password = $usermodel->selectPWDbyUID($uid);
            if ($password == $oldpassword) {
                $usermodel->edit("password", $newpassword, $uid);
                $result = array (
                    "status" => "success",
                    "reason" => "",
                    "passwordmodify" => "yes"
                    );
            }
            else {
                $result = array (
                    "status" => "failed",
                    "reason" => "Please input the correct old password to set the new password.",
                    "passwordmodify" => "no"
                    );
            }
        }
        else {
            $result = array (
                    "status" => "success",
                    "reason" => "",
                    "passwordmodify" => "no"
                    );
        }
        echo json_encode($result);
    }

    public function editTeacherProfileAction() {
        $uid = $_SESSION['uid'];
        $uname = $_POST['uname'];
        $age = $_POST['age'];
        $grade = $_POST['grade'];
        $school = $_POST['school'];
        $phonenumber = $_POST['tel'];
        $goodcourse = $_POST['goodcourse'];
        $profile = $_POST['profile'];
        $pw_identify = $_POST['pw_identify'];
        $course_identify = $_POST['course_identify'];
        $teachcourse_identify = $_POST['teachcourse_identify'];
        $math = $_POST['math'];
        $chinese = $_POST['chinese'];
        $english = $_POST['english'];
        $physics = $_POST['physics'];
        $chemistry = $_POST['chemistry'];
        $biology = $_POST['biology'];
        $oldpassword = $_POST['old_password'];
        $newpassword = $_POST['new_password'];
        $usermodel = new ProfileModel("user");
        $profilemodel = new ProfileModel("profile");
        if ($uname != "") {
            $_SESSION['uname'] = $uname;
            $usermodel->edit("uname", $uname, $uid);
        }
        if ($age != "") {
            $usermodel->edit("age", $age, $uid);
        }
        if ($grade != "") {
            $usermodel->edit("grade", $grade, $uid);
        }
        if ($school != "") {
            $usermodel->edit("school", $school, $uid);
        }
        if ($phonenumber != "") {
            $usermodel->edit("phonenumber", $phonenumber, $uid);
        }
        if ($course_identify == 1) {
            if ($profilemodel->selectbyUID($uid)) {
                $profilemodel->edit("courses", $goodcourse, $uid);
            }
            else {
                $profilemodel->insert(array("uid" => $uid, "courses" => $goodcourse));
            }
        }
        if ($profile != "") {
            if ($profilemodel->selectbyUID($uid)) {
                $profilemodel->edit("introduction", $profile, $uid);
            }
            else {
                $profilemodel->insert(array("uid" => $uid, "profile" => $profile));
            }
        }
        if ($teachcourse_identify == 1) {
            $usermodel->deleteoldteachcourse($uid);
            if ($math == 1) {
                $usermodel->insertnewteachcourse($uid, 1);
            }
            if ($chinese == 1) {
                $usermodel->insertnewteachcourse($uid, 2);
            }
            if ($english == 1) {
                $usermodel->insertnewteachcourse($uid, 3);
            }
            if ($physics == 1) {
                $usermodel->insertnewteachcourse($uid, 4);
            }
            if ($chemistry == 1) {
                $usermodel->insertnewteachcourse($uid, 5);
            }
            if ($biology == 1) {
                $usermodel->insertnewteachcourse($uid, 6);
            }
        }
        if ($pw_identify == 1) {
            $password = $usermodel->selectPWDbyUID($uid);
            if ($password == $oldpassword) {
                $usermodel->edit("password", $newpassword, $uid);
                $result = array (
                    "status" => "success",
                    "passwordmodify" => "yes",
                    "reason" => ""
                    );
            }
            else {
                $result = array (
                    "status" => "failed",
                    "reason" => "Please input the correct old password to set the new password.",
                    "passwordmodify" => "no"
                    );
            }
        }
        else {
            $result = array (
                    "status" => "success",
                    "reason" => "",
                    "passwordmodify" => "no"
                    );
        }
        echo json_encode($result);
    }
}







?>