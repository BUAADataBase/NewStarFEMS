<?php

class RootController extends BaseController {

    public function jumpAction() {
        $this->redirect("", "root", 1);
    }

    public function  getUserInfoAction(){
        $rootmodel = new RootModel("user");
        $result = $rootmodel->getInfo();
        echo json_encode($result);
    }

    public function deleteUserAction() {
        $userid = $_POST['uid'];
        $rootmodel = new RootModel("user");
        $rootmodel->deleteUserbyuid($userid);
        echo json_encode(array("status" => "success"));
    }

    public function queryUserAction() {
        $username = $_POST['uname'];
        $rootmodel = new RootModel("user");
        $result = $rootmodel->queryUserbyuname($username);
        echo json_encode($result);
    }
}








?>