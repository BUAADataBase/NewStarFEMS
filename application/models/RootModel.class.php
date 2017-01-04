<?php

class RootModel extends Model {

    public function getInfo() {
        $sql = "select * from (select uid, uname, identify, phonenumber, calTotalCost(uid) as money from user where identify = 0 union select uid, uname, identify, phonenumber, calTotalIncome(uid) as money from user where identify = 1) temp order by uid asc";
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
        $sql = "select * from (select uid, uname, identify, phonenumber, calTotalCost(uid) as money from user where identify = 0 and uname = '$username' union select uid, uname, identify, phonenumber, calTotalIncome(uid) as money from user where identify = 1 and uname = '$username') temp order by uid asc";
        return $this->db->getAll($sql);
    }
}








?>