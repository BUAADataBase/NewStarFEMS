<?php

class LoginModel extends Model {

    public function select($target, $key, $value) {
        $sql = "select $target from user where $key = $value";
        return $this->db->getOne($sql);
    }
}






?>