<?php

class StatisticsModel extends Model {

    public function getStudentsNum($num) {
        $sql = "select getStudentNum($num) as number";
        return $this->db->getOne($sql);
    }

    public function getTeachersNum($num) {
        $sql = "select getTeacherNum($num) as number";
        return $this->db->getOne($sql);
    }

    public function getAllMessage() {
        $sql = "select calNumberofRegistered() as PersonAmount, calNumberofStudent() as StudentAmount, calNumberofTeacher() as TeacherAmount, count(*) as SCAmount, avgofStudentchooseCourse() as AVGofStudentSC, avgofTeacherteachCourse() as AVGofTeacherSC, studentSelectCoursePercent() as PercentofSCStudent, teacherTeachCoursePercent() as PercentofSCTeacher from selectcourse";
        return $this->db->getAll($sql);
    }
}







?>