<?php

class SelectedModel extends Model {

    public function selectbyuid($studentid) {
        $sql = "select user.uid, uname, course.cid, cname, period, price from selectcourse, user, course where user.uid = selectcourse.uid_teacher and course.cid = selectcourse.cid and selectcourse.uid_student = $studentid";
        $this->db->getAll($sql);
    }

    public function selectbyuidAndcid($studentid, $teacherid, $courseid) {
        $sql = "select * from $this->table where $this->table.uid_student = $studentid and $this->table.uid_teacher = $teacherid && $this->table.cid = $courseid";
        return $this->db->getOne($sql);
    }

    public function deletebyuidAndcid($studentid, $teacherid, $courseid) {
        $sql = "delete from $this->table where $this->table.uid_student = $studentid and $this->table.uid_teacher = $teacherid && $this->table.cid = $courseid";
        $this->db->query($sql);
    }
}




?>