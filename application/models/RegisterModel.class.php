<?php

class RegisterModel extends Model {

    public function getnextID() {
        $sql = "select uid from user order by uid desc";
        $maxuserid = $this->db->getOne($sql);
        return ($maxuserid + 1);
    }

    public function select($key, $value) {
        $sql = "select * from user where $key = '$value'";
        return $this->db->getAll($sql);
    }
}




?>