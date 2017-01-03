<?php

class LogoutController extends BaseController {

    public function logoutAction() {
        isset($_SESSION) or session_start();
        $_SESSION = array();
        session_destroy();
        echo json_encode(array("status" => "success"));
    }
}




?>