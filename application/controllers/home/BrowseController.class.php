<?php

class BrowseController extends BaseController {

    public function jumpAction() {
        $this->redirect("", "browsestudent", 1);
    }

    public function getStudentAction() {
        $teacherid = $_SESSION['uid'];
        $num = $_POST['number'];
        $max = $_POST['max'];
        $browsemodel = new BrowseModel("selectcourse");
        $result = $browsemodel->getStudentsbyUID($teacherid);
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
            "studentlist" => $result,
            "listlength" => $length
            );
        echo json_encode($newresult);
    }


    public function ConfirmAction() {
        $teacherid = $_SESSION['uid'];
        $studentid = $_POST['studentid'];
        $courseid = $_POST['courseid'];
        $price = $_POST['price'];
        $browsemodel = new BrowseModel("selectcourse");
        if ($browsemodel->WritePrice($studentid, $teacherid, $courseid, $price)) {
            $result = array (
                "status" => "success",
                "reason" => "");
        }
        else {
            $result = array (
                "status" => "failed",
                "reason" => "The student has canceled your course or you have confirmed it in another place.");
        }
        echo json_encode($result);
    }


    public function DisConfirmAction() {
        $teacherid = $_SESSION['uid'];
        $studentid = $_POST['studentid'];
        $courseid = $_POST['courseid'];
        $browsemodel = new BrowseModel("selectcourse");
        if ($browsemodel->DisWritePrice($studentid, $teacherid, $courseid)) {
            $result = array (
                "status" => "success",
                "reason" => "");
        }
        else {
            $result = array (
                "status" => "failed",
                "reason" => "You have canceled it in another place.");
        }
        echo json_encode($result);
    }
}










?>