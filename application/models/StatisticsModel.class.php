<?php

class StatisticsModel extends Model {

    public function getStudentsNum($num) {
        $sql = "select getStudentNum($num) as number;"
        return $this->db->getOne($sql);
    }
    public function getTeachersNum($num) {
        $sql = "select getTeacherNum($num) as number;"
        return $this->db->getOne($sql);
    }
}







?>