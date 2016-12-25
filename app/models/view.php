<?php

class View_Model {

    private $data = array();
    private $render = FALSE;

    public function __construct($template) {
        $file = APP_ROOT . '\views\\' . strtolower($template) . '.php';

        if (file_exists($file)) {
            $this->render = $file;
        }
    }

    public function assign($varible, $value) {
        $this->data[$varible] = $value;
    }

    public function __destruct() {
        $data = $this->data;
        include($this->render);
    }
}



?>