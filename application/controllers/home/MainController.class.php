<?php

class MainController extends BaseController {

    public function jumpAction() {
        if ($_SESSION['identify'] = "teacher") {
            $this->redirect("", "main_teacher", 1);
        }
        else {
            $this->redirect("", "main_student", 1);
        }
        //echo json_encode(array("status" => "success"));
    }

    public function getnameAction() {
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
    public getAllTeacherListAction() {
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

    public getTeacherListbyCourseAction() {
        $mainmodel = new MainModel("teachcourse");

    }

    public getTeacherCourseAction() {
        $teacherid = $_POST['uid'];
        $mainmodel = new MainModel("teachcourse");
    }
}







?>