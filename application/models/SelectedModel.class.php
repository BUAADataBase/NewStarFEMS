<?php

class SelectedModel extends Model {

    public function selectbyuid($studentid) {
        $sql = "select user.uid, uname, course.cid, cname, period, price from selectcourse, user, course where user.uid = selectcourse.uid_teacher and course.cid = selectcourse.cid and selectcourse.uid_student = $studentid";
        $this->db->getAll($sql);
    }
}




?>