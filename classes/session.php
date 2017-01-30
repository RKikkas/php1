<?php

/**
 * Created by PhpStorm.
 * User: roger.kikkas
 * Date: 30.01.2017
 * Time: 15:45
 */
class session
{// class begin
    // class variables
    var $sid = false;
    var $vars = false;
    var $http = false;
    var $db = false;
    var $anonymous = true;
    var $timeout = 1800;

    // class methods
    // construct
 	function __construct(&$http, &$db){
        $this->http = &$http;
        $this->db = &$db;
        $this->sid = $http->get('sid');
    }// construct
}// class end