<?php

class SelectedModel extends Model {

    public function selectbyuid($studentid) {
        $sql = "select user.uid, uname, course.cid, cname, period, price, confirm from selectcourse, user, course where user.uid = selectcourse.uid_teacher and course.cid = selectcourse.cid and selectcourse.uid_student = $studentid";
        return $this->db->getAll($sql);
    }

    public function selectbyuidAndcid($studentid, $teacherid, $courseid) {
        $sql = "select * from $this->table where $this->table.uid_student = $studentid and $this->table.uid_teacher = $teacherid and $this->table.cid = $courseid";
        return $this->db->getOne($sql);
    }

    public function deletebyuidAndcid($studentid, $teacherid, $courseid) {
        $sql = "delete from $this->table where $this->table.uid_student = $studentid and $this->table.uid_teacher = $teacherid and $this->table.cid = $courseid";
        $this->db->query($sql);
    }


    public function getCost($studentid) {
        $sql = "select calTotalCost($studentid) as cost";
        return $this->db->getOne($sql);
    }
}




?>