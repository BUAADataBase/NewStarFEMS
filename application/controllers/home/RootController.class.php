<?php

class RootController extends BaseController {

    public function jumpAction() {
        $this->redirect("", "root", 1);
    }

    public function  getUserInfo(){
        $rootmodel = new RootModel("user");
        $result = $rootmodel->getInfo();
        echo json_encode($result);
    }
}








?>