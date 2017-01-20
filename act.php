<?php
/**
 * Created by PhpStorm.
 * User: roger.kikkas
 * Date: 20.01.2017
 * Time: 12:12
 */
$act = $http->get('act'); // act value from url
// create act file path according to act value
$fn = ACTS_DIR.str_replace('.', '/', $act). '.php';
if(file_exists($fn) and is_file($fn) is_readable($fn)){
    require_once $fn;
} else {

}
?>