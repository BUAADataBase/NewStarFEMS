<?php

class SelectedController extends BaseController {

    public function SelectedCourseAction() {
        $studentid = $_SESSION['uid'];
        $num = $_POST['number'];
        $max = $_POST['max'];
        $selectedmodel = new SelectedModel("selectcourse");
        $result = $selectedmodel->selectbyuid($studentid);
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
            "selectedcourselist" => $result,
            "listlength" => $length
            );
        echo json_encode($newresult);
    }

    public function CancelCourseAction() {
        $studentid = $_SESSION['uid'];
        $teacherid = $_POST['teacherid'];
        $courseid = $_POST['courseid'];
        $selectedmodel = new SelectedModel("selectcourse");
        if ($selectedmodel->selectbyuidAndcid($studentid, $teacherid, $courseid)) {
            $selectedmodel->deletebyuidAndcid($studentid, $teacherid, $courseid);
            $result =array (
                "status" => "success",
                "reason" => "");
        }
        else {
            $result =array (
                "status" => "failed",
                "reason" => "The select course record is not exists.");
        }
        echo json_encode($result);
    }

    public function GetCostAction() {
        $studentid = $_SESSION['uid'];
        $selectedmodel = new SelectedModel("selectcourse");
        $result = $selectedmodel->getCost($studentid);
        echo json_encode(array ("cost" => $result));
    }

    public function jumpAction() {
        $this->redirect("", "selected_course", 1);
    }
}












?>