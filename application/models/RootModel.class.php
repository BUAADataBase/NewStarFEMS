<?php

class RootModel extends Model {

    public function getInfo() {
        $sql = "select uid, uname, phonenumber, calTotalCost(uid) as money from user";
        return $this->db->getAll($sql);
    }

    public function deleteUserbyuid($uid) {
        $sql = "call deleteUser($uid)";
        $this->db->query($sql);
    }

    public function queryOneUserbyuid($uid) {
        $sql = "select * from user where uid = $uid";
        return $this->db->getOne($sql);
    }

    public function queryUserbyuname($username) {
        $sql = "select uid, uname, phonenumber, calTotalCost(uid) as money from user where uname = '$username'";
        return $this->db->getAll($sql);
    }
}








?>