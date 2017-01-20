<?php

/**
 * Created by PhpStorm.
 * User: roger.kikkas
 * Date: 20.01.2017
 * Time: 8:59
 */
class mysql
{// class begin
    // class variables
    var $conn = false; // connection to database server
    var $host = false; // database server name/ip
    var $user = false; // database server user name
    var $pass = false; // database server user password
    var $dbname = false; // one of user databases
    // class methods
    // construct
    function __construct($h, $u, $p, $dbn){
        $this->host = $h; // real database server name
        $this->user = $u; // real database server user name
        $this->pass = $p; // real database server user password
        $this->dbname = $dbn; // database server user database
        $this->connect(); // connect to real database server
    }//construct
    // connection to database server
    function connect(){
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->dbname);
        if(mysqli_connect_error()){
            echo 'Viga andmebaasi ühendamisega<br />';
            exit;
        } // if problem with connection
    }// connect

    // query to database
    function query($sql){
        $res = mysqli_query($this->conn, $sql);
        if($res === FALSE){
            echo 'Viga päringuga <b>'.$sql.'</b><br />';
            echo mysqli__error($this->conn).'<br />';
            exit;
        }
        return $res;
    }// query
}// class end
?>