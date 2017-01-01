<?php
class Loader {

    public function library($lib) {
        include(LIB_PATH . "$lib.class.php");
    }

    public function helper($helper) {
        include(HELPER_PATH . "{$helper}_helper.php");
    }
}


?>