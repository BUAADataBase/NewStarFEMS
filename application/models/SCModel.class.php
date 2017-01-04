<?php

class SCModel extends Model {

    public function selectone($studentid, $teacherid, $cid) {
        $sql = "select uid_student from $this->table where uid_student = $studentid and uid_teacher = $teacherid and cid = $cid";
        // if ($this->db->getOne($sql) == false) {
        //     return false;
        // }
        // else {
        //     return true;
        // }
        return $this->db->getOne($sql);
    }
}






?>