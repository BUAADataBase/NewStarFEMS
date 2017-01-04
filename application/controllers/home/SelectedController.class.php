<?php

class SelectedController extends BaseController {

    public function SelectedCourseAction() {
        $studentid = $_POST['uid'];
        $num = $_POST['number'];
        $max = $_POST['max'];
        $selectedmodel = new SelectedModel("selectcourse");
        $result = $selectedmodel->selectbyuid($studentid);
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
}












?>