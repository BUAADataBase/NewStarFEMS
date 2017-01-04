<?php

class MainModel extends Model {

    public function selectonebyitem($item, $uid) {
        $sql = "select $item from $this->table where uid = $uid";
        return $this->db->getOne($sql);
    }

    public function selectallbyitem($identify) {
        $sql = "select $this->table.uid, uname, introduction from $this->table, profile where identify = $identify and profile.uid = $this->table.uid";
        return $this->db->getAll($sql);
    }

    public function selectallbycourse($cid) {
        $sql = "select user.uid, uname, introduction from $this->table, user, profile where cid = $cid and user.uid = $this->table.uid and profile.uid = user.uid";
        return $this->db->getAll($sql);
    }

    public function selectallbyuid($uid) {
        $sql = "select course.cid, cname, introduction from $this->table, course, profile where uid = $uid and course.cid = $this->table.cid and profile.uid = $uid";
        return $this->db->getAll($sql);
    }

}








?>