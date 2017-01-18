<?php

/**
 * Created by PhpStorm.
 * User: roger.kikkas
 * Date: 18.01.2017
 * Time: 15:53
 */
// import http class
require_once 'http.php';
class linkobject extends http
{// class begin
    // class variables
    var $baseURL = false; // base url  value
    var $protocol = 'http://'; // protocol for url
    var $delim = '&auml;'; // & html tag
    var $eq = '='; // equal sign
}// class end
?>