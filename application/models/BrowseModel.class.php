<?php

class BrowseModel extends Model {

    public function getStudentsbyUID($teacherid) {
        $sql = "select user.uid, uname, course.cid, cname, introduction from user, selectcourse, profile, course where user.uid = selectcourse.uid_student and course.cid = selectcourse.cid and user.uid = profile.uid and selectcourse.uid_teacher = $teacherid and confirm = 0";
        return $this->db->getAll($sql);
    }

    public function getConfirmedStudentsbyUID($teacherid) {
        $sql = "select user.uid, uname, course.cid, cname, introduction from user, selectcourse, profile, course where user.uid = selectcourse.uid_student and course.cid = selectcourse.cid and user.uid = profile.uid and selectcourse.uid_teacher = $teacherid and confirm = 1";
        return $this->db->getAll($sql);
    }

    public function WritePrice($studentid, $teacherid, $courseid, $price) {
        $sql = "select * from $this->table where uid_student = $studentid and uid_teacher = $teacherid and cid = $courseid and confirm = 0";
        if ($this->db->getOne($sql) == false) {
            return false;
        }
        else {
            $sql = "call ConfirmMoney($price, $studentid, $teacherid, $courseid)";
            $this->db->query($sql);
            return true;
        }
    }


    public function DisWritePrice($studentid, $teacherid, $courseid) {
        $sql = "select * from $this->table where uid_student = $studentid and uid_teacher = $teacherid and cid = $courseid and confirm = 1";
        if ($this->db->getOne($sql) == false) {
            return false;
        }
        else {
            $sql = "call DisConfirmMoney($studentid, $teacherid, $courseid)";
            $this->db->query($sql);
            return true;
        }
    }
}





?>