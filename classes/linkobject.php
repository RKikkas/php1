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
}
// import http class file
require_once 'http.php';
class linkobject extends http
{// class begin
    // class variables
    var $baseUrl = false; // base url value
    var $protocol = 'http://'; // protocol for url
    var $delim = '&amp;'; // & html tag
    var $eq = '='; // equal sign
    // class methods
    // construct
    function __construct(){
        parent::__construct(); // import http class construct
        $this->baseUrl = $this->protocol.HTTP_HOST.SCRIPT_NAME;
    }// construct
    // create http data pairs and merge them
    // pair is element_name=element_value, for example user=admin
    // name1=value1&name2=value2
    // for merging use &$link
    function addToLink(&$link, $name, $val){
        // if pair is already created
        if($link != ''){
            // name=value&
            $link = $link.$this->delim;
        }
        $link = $link.fixUrl($name).$this->eq.fixUrl($val); // name=value
    }// addToLink
    // create url -> baseUrl + data pairs
    function getLink($add = array()){
        $link = '';
        foreach ($add as $name => $val){
            $this->addToLink($link, $name, $val);
        }
        if($link != ''){
            $link = $this->baseUrl.'?'.$link;
        } else {
            $link = $this->baseUrl;
        }
        return $link;
    }// getLink
}// class end
?>