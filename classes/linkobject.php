<?php

/**
 * Created by PhpStorm.
 * User: roger.kikkas
 * Date: 18.01.2017
 * Time: 15:53
 */
// useful function
function fixUrl($val){
    return urlencode($val);
}// fixUrl
// import http class
require_once 'http.php';
class linkobject extends http
{// class begin
    // class variables
    var $baseURL = false; // base url  value
    var $protocol = 'http://'; // protocol for url
    var $delim = '&auml;'; // & html tag
    var $eq = '='; // equal sign
    // class methods
    // construct
    function __construct(){
        parent::__construct(); // import http class construct
        $this->baseUrl = $this->protocol.HTTP_HOST.SCRIPT_NAME;
    }// construct
    // create http data pairs and merge them
    // pair is element_name=element_value, for example user=test
    // name1=value1&name2=value2
    function addToLink($link, $name, $val){
        $link = $name.$this->eq.$val;
    }// addToLink
}// class end
?>