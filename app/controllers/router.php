<?php

function __autoload($className) {
    list($filename, $suffix) = explode('_', $className);

    $file = APP_ROOT . '\models\\' . strtolower($filename) . '.php';


    if (file_exists($file)) {
        include_once($file);
    }
    else {
        die("File '$filename' containing class '$className' not found.");
    }
}

$request = $_SERVER['QUERY_STRING'];
$parsed = explode('&', $request);

$page = array_shift($parsed);
$getVars = array();

foreach ($parsed as $argument) {
    list($varible, $value) = explode('=', $argument);
    $getVars[$varible] = $value;
}


$target = APP_ROOT . '\controllers\\' . $page . '.php';

if (file_exists($target)) {
    include_once($target);

    $class = ucfirst($page) . '_Controller';

    if (class_exists($class)) {
        $controller = new $class;
    }
    else {
        die('class does not exist!');
    }
}
else {
    die('page does not exist!');
}


$controller->main($getVars);



?>