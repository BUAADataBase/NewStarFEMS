<?php

class MainModel extends Model {

    public function selectonebyitem($item, $uid) {
        $sql = "select $item from $this->table where uid = '$uid'";
        return $this->db->getOne($sql);
    }

    public function selectallbyitem($identify) {
        $sql = "select uid, uname from $this->table where identify = $identify";
        return $this->db->getAll($sql);
    }

    public function selectallbycourse($cid) {
        $sql = "select uid, uname from $this->table, user where cid = $cid and user.uid = $this->table.uid";
        return $this->db->getAll($sql);
    }



}








?>