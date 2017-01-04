<?php

class SCController extends BaseController {

    public function SCAction() {
        isset($_SESSION) or session_start();
        $studentid = $_SESSION['uid'];
        //$studentid = $_POST['studentid'];
        $teacherid = $_POST['teacherid'];
        $courseid = $_POST['courseid'];
        $period = $_POST['period'];
        $scmodel = new SCModel("selectcourse");
        if ($scmodel->selectone($studentid, $teacherid, $courseid) != false) {
            $result = array (
                "status" => "failed",
                "reason" => "You have selected the same course taught by the same teacher."
                );
        }
        else {
            $result = array (
                "status" => "success",
                "reason" => ""
                );
            $list = array (
                "uid_student" => $studentid,
                "uid_teacher" => $teacherid,
                "cid" => $courseid,
                "period" => $period
                );
            $scmodel->insert($list);
        }
        echo json_encode($result);
    }

    public function jumpAction() {
        $this->redirect("", "choose_course", 1);
    }
}







?>