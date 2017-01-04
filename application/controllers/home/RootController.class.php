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

    public function deleteUserAction()
}








?>