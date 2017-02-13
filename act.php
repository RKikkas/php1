<?php
/**
 * Created by PhpStorm.
 * User: roger.kikkas
 * Date: 20.01.2017
 * Time: 12:12
 */
$act = $http->get('act');
$fn = ACTS_DIR.str_replace('.', '/', $act).'.php';
//control act file
if(file_exists($fn) and is_file($fn) and is_readable($fn)){
    require_once $fn;
} else {
    // if file is not there
    // define defaut act file path
    $fn = ACTS_DIR.DEFAULT_ACT.'.php';
    //
    $http->set($act, DEFAULT_ACT);
    require_once $fn;
}
?>