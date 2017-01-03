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
        $usermodel = new ProfileModel("user");
        $profilemodel = new ProfileModel("profile");
        if ($uname != "") {
            $_SESSION['uname'] = $uname;
            $usermodel->edit("uname", $uname);
        }
        if ($age != "") {
            $usermodel->edit("age", $age);
        }
        if ($grade != "") {
            $usermodel->edit("grade", $grade);
        }
        if ($school != "") {
            $usermodel->edit("school", $school);
        }
        if ($phonenumber != "") {
            $usermodel->edit("phonenumber", $phonenumber);
        }
        if ($course_identify == 1) {
            if ($profilemodel->selectbyUID($uid)) {
                $profilemodel->edit("courses", $weakcourse);
            }
            else {
                $profilemodel->insert(array("uid" => $uid, "courses" => $weakcourse));
            }
        }
        if ($profile != "") {
            if ($profilemodel->selectbyUID($uid)) {
                $profilemodel->edit("profile", $weakcourse);
            }
            else {
                $profilemodel->insert(array("uid" => $uid, "profile" => $profile));
            }
        }
        if ($pw_identify == 1) {
            $password = $usermodel->selectPWDbyUID($uid);
            if ($password == $oldpassword) {
                $usermodel->edit("password", $password);
                $result = array (
                    "status" => "success";
                    "reason" => "";
                    )
            }
            else {
                $result = array (
                    "status" => "failed";
                    "reason" => "Please input the correct old password to set the new password.";
                    )
            }
        }
        echo json_encode($result);
    }

    public function editTeacherProfileAction() {
        $uid = $_SESSION['uid'];
        $uname = $_POST['uname'];
        $age = $_POST['age'];
        $grade = $_POST['grade'];
        $school = $_POST['school'];
        $phonenumber = $_POST['phonenumber'];
        $goodcourse = $_POST['goodcourse'];
        $profile = $_POST['profile'];
        $pw_identify = $_POST['pw_identify'];
        $course_identify = $_POST['course_identify'];
        $teachcourse_identify = $_POST['teachcourse_identify'];
        $math = $_POST['math'];
        $chinese = $_POST['chinese'];
        $english = $_POST['english'];
        $physics = $_POST['physics'];
        $chemisty = $_POST['chemisty'];
        $biology = $_POST['biology'];
        $usermodel = new ProfileModel("user");
        $profilemodel = new ProfileModel("profile");
        $_SESSION['uname'] = $uname;
        if ($uname != "") {
            $_SESSION['uname'] = $uname;
            $usermodel->edit("uname", $uname);
        }
        if ($age != "") {
            $usermodel->edit("age", $age);
        }
        if ($grade != "") {
            $usermodel->edit("grade", $grade);
        }
        if ($school != "") {
            $usermodel->edit("school", $school);
        }
        if ($phonenumber != "") {
            $usermodel->edit("phonenumber", $phonenumber);
        }
        if ($course_identify == 1) {
            if ($profilemodel->selectbyUID($uid)) {
                $profilemodel->edit("courses", $goodcourse);
            }
            else {
                $profilemodel->insert(array("uid" => $uid, "courses" => $goodcourse));
            }
        }
        if ($profile != "") {
            if ($profilemodel->selectbyUID($uid)) {
                $profilemodel->edit("profile", $weakcourse);
            }
            else {
                $profilemodel->insert(array("uid" => $uid, "profile" => $profile));
            }
        }
        if ($teachcourse_identify == 1) {
            $usermodel->deleteoldteachcourse($uid);
        }
        else if {
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
            if ($chemisty == 1) {
                $usermodel->insertnewteachcourse($uid, 5);
            }
            if ($biology == 1) {
                $usermodel->insertnewteachcourse($uid, 6);
            }
        }
        if ($pw_identify == 1) {
            $password = $usermodel->selectPWDbyUID($uid);
            if ($password == $oldpassword) {
                $usermodel->edit("password", $password);
                $result = array (
                    "status" => "success";
                    "reason" => "";
                    )
            }
            else {
                $result = array (
                    "status" => "failed";
                    "reason" => "Please input the correct old password to set the new password.";
                    )
            }
        }
        echo json_encode($result);
    }
}







?>