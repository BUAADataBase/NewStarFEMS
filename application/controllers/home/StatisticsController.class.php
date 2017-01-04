<?php

class StatisticsController extends BaseController {

    public function jumpAction() {
        $this->redirect("", "statistics", 1);
    }

    public function ChartAction() {
        $statisticsmodel = new StatisticsModel("user");
        $result1 = $statisticsmodel->getStudentsNum(0);
        $result2 = $statisticsmodel->getStudentsNum(1);
        $result3 = $statisticsmodel->getStudentsNum(2);
        $result4 = $statisticsmodel->getStudentsNum(3);
        $result5 = $statisticsmodel->getStudentsNum(4);
        $result6 = $statisticsmodel->getStudentsNum(5);
        $result7 = $statisticsmodel->getStudentsNum(6);
        $array1 = array(
            "no1" => $result1['number'],
            "no2" => $result2['number'],
            "no3" => $result3['number'],
            "no4" => $result4['number'],
            "no5" => $result5['number'],
            "no6" => $result6['number'],
            "no7" => $result7['number']
            );
        $result1 = $statisticsmodel->getTeachersNum(0);
        $result2 = $statisticsmodel->getTeachersNum(1);
        $result3 = $statisticsmodel->getTeachersNum(2);
        $result4 = $statisticsmodel->getTeachersNum(3);
        $result5 = $statisticsmodel->getTeachersNum(4);
        $result6 = $statisticsmodel->getTeachersNum(5);
        $result7 = $statisticsmodel->getTeachersNum(6);
        $array2 = array(
            "no1" => $result1['number'],
            "no2" => $result2['number'],
            "no3" => $result3['number'],
            "no4" => $result4['number'],
            "no5" => $result5['number'],
            "no6" => $result6['number'],
            "no7" => $result7['number']
            );
        $result = array (
            "teacher" => $array2,
            "student" => $array1);
        return json_encode($result);
    }
}










?>