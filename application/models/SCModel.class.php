<?php

class SCModel extends Model {

    public function selectone($studentid, $teacherid, $cid) {
        $sql = "select uid_student from $this->table where uid_student = $studentid and uid_teacher = $teacherid and cid = $cid";
        return $this->db->getOne($sql);
    }
}






?>