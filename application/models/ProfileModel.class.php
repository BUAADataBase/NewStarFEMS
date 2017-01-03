<?php

class ProfileModel extends Model {

    public function edit($key, $value, $uid) {
        if (is_numeric($value)) {
            $sql = "update $this->table set $key = $value where uid = $uid";
        }
        else {
            $sql = "update $this->table set $key = '$value' where uid = $uid";
        }
        //$list = array ($key => $value);
        //$this->update($list);
        $this->db->query($sql);
    }

    public function selectbyUID($value) {
        $sql = "select * from $this->table where uid = $value";
        return $this->db->getOne($sql);
    }

    public function selectPWDbyUID($value) {
        $sql = "select password from user where uid = $value";
        return $this->db->getOne($sql);
    }

    public function deleteoldteachcourse($value) {
        $sql = "delete from teachcourse where uid = $value";
        $this->db->query($sql);
    }

    public function insertnewteachcourse($uid, $cid) {
        $sql = "insert into teachcourse (uid, cid) VALUES ($uid, $cid)";
        $this->db->query($sql);
    }
}









?>