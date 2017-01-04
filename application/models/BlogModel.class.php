<?php

class BlogModel extends Model {

    public function getBlogbyUID($userid) {
        $sql = "select user.uid, uname, blog.blogid, headline, blogmessage from user, blog, userblog where user.uid = userblog.uid and blog.blogid = userblog.blogid and user.uid = $userid";
        return $this->db->getAll($sql);
    }

    public function getNamebyUID($userid) {
        $sql = "select uname from user where $uid = $userid";
        return $this->db->getOne($sql);
    }

}











?>