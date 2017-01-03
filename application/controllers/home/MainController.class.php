<?php

class MainController extends BaseController {

    public function jumpAction() {
        if ($_SESSION['identify'] == 1) {
            $this->redirect("", "main_teacher", 1);
        }
        else {
            $this->redirect("", "main_student", 1);
        }
        //echo json_encode(array("status" => "success"));
    }

    public function getnameAction() {
        isset($_SESSION) or session_start();
        echo json_encode(array("name" => $_SESSION['uname']));
    }


    /**
     * POST: "item" => "uid" or
     *       "item" => "uname" or
     *       "item" => "sex" or
     *       "item" => "age" or
     *       "item" => "school" or
     *       "item" => "phonenumber" or
     *       "item" => "mailaddress" or
     *       "item" => "identify" or
     *       "item" => "grade"
     * RETURN: "value" => the value of the user item in the database.
     *         "status" => "success" or "failed".
     * FUNCTION: 获取当前用户的表项信息(如name,uid等).
     */
    public function getAction() {
        $item = $_POST['item'];
        $mainmodel = new MainModel("user");
        $value = $mainmodel->selectonebyitem($item, $_SESSION['uid']);
        if ($value != false) {
            $result = array (
                "value" => $value,
                "status" => "success"
                );
        }
        else {
            $result = array (
                "value" => "failed",
                "status" => "failed"
                );
        }
        echo json_encode($result);
    }

    /**
     * POST: 无
     * RETURN: "list" => the array of the teacher uid and uname in the database.
     *                     eg. $list = array (
     *                             array (
     *                                 "uid" => 1,
     *                                 "uname" => zhutc
     *                             )
     *                             array (
     *                                 "uid" => 2,
     *                                 "uname" => kangjw
     *                             )
     *                         )
     *         "status" => "success" or "failed".
     * FUNCTION: 获取所有老师的uid和uname.
     */
    public function getAllTeacherListAction() {
        $mainmodel = new MainModel("user");
        $list = $mainmodel->selectallbyitem(1);
        if (count($list) == 0) {
            $result = array (
                "list" => $list,
                "status" => "failed"
                );
        }
        else {
            $result = array (
                "list" => $list,
                "status" => "success"
                );
        }
        echo json_encode($result);
    }

    public function getTeacherListbyCourseAction() {
        $cid = $_POST['courseid'];
        $mainmodel = new MainModel("teachcourse");
        $result = $mainmodel->selectallbycourse($cid);
        echo json_encode($result);
    }

    public function getTeacherCourseAction() {
        $teacherid = $_POST['uid'];
        $mainmodel = new MainModel("teachcourse");
        $result = $mainmodel->selectallbyuid($teacherid);
        echo json_encode($result);
    }

    public function getTeacherListbyCourseIntenAction() {
        $cid = $_POST['courseid'];
        $num = $_POST['number'];
        $max = $_POST['max'];
        $mainmodel = new MainModel("teachcourse");
        $result = $mainmodel->selectallbycourse($cid);
        $length = count($result);
        if ($length < $max * $num - $max + 1) {
            $result = array();
        }
        else if ($length >= $max * $num - $max + 1 && $length <= $max * $num) {
            $result = array_slice($result, $max * $num - $max, $length - $max * $num + $max);
        }
        else {
            $result = array_slice($result, $max * $num - $max, $max);
        }
        $newresult = array (
            "teacherlist" => $result,
            "length" => $length
            );
        echo json_encode($newresult);
    }

    public function getTeacherCourseIntenAction() {
        $teacherid = $_POST['uid'];
        $num = $_POST['number'];
        $mainmodel = new MainModel("teachcourse");
        $result = $mainmodel->selectallbyuid($teacherid);
        $length = count($result);
        if ($length < $max * $num - $max + 1) {
            $result = array();
        }
        else if ($length >= $max * $num - $max + 1 && $length <= $max * $num) {
            $result = array_slice($result, $max * $num - $max, $length - $max * $num + $max);
        }
        else {
            $result = array_slice($result, $max * $num - $max, $max);
        }
        $newresult = array (
            "courselist" => $result,
            "length" => $length
            );
        echo json_encode($newresult);
    }
}







?>