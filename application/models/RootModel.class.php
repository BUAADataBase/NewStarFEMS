<?php

class RootModel extends Model {

    public function getInfo() {
        $sql = "select uid, uname, phonenumber, calTotalCost(uid) from user";
        return $this->db->getAll($sql);
    }
}








?>