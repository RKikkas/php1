<?php
/**
 * Created by PhpStorm.
 * User: roger.kikkas
 * Date: 30.01.2017
 * Time: 15:51
 */
function fixDb($val){
    return '"'.addslashes($val).'"';
}
?>