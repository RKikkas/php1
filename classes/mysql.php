<?php

/**
 * Created by PhpStorm.
 * User: roger.kikkas
 * Date: 20.01.2017
 * Time: 8:59
 */
class mysql
{ // class begin
    // class variables
    var $conn = false; // connection to database server
    var $host = false; // database server name / ip
    var $user = false; // database sever user
    var $pass = false; // database server password
    var $dbname = false; // database server user database
    var $history = array();
    // class methods
    // constructor
    function __construct($h ,$u ,$p ,$dn)
    {
        $this->host = $h;
        $this->user = $u;
        $this->pass = $p;
        $this->dbname = $dn;
        $this->connect();
    }// construct
    // connect to database server and use database
    function connect(){
        $this->conn = mysqli_connect($this->host,$this->user,$this->pass,$this->dbname);
        if (!$this->conn){
            echo 'Probleem andmebaasi ühendamisega<br>';
            exit;
        }
    } // connect
    //control query time
    function getMicrotime(){
        list($usec, $sec) = explode(" ", microtime());
        return ((float)$usec + (float)$sec);
    }// getMicrotime
    // query to database
    function query($sql){
        $begin = $this->getMicrotime();
        $res = mysqli_query($this->conn, $sql); // query result
        if($res === FALSE){
            echo 'Viga päringus <b>'.$sql.'</b><br />';
            echo mysqli_error($this->conn).'<br />';
            exit;
        }
        $time = $this->getMicrotime() - $begin;
        $this->history[] = array(
            'sql' => $sql,
            'time' => $time
        );
        return $res;
    }// query
    // query data result
    function getArray($sql){
        $res = $this->query($sql);
        $data = array();
        while($record = mysqli_fetch_assoc($res)){
            $data[] = $record;
        }
        if(count($data) == 0){
            return false;
        }
        return $data;
    } // get array
    // output query history log array
    function showHistory(){
        if(count($this->history) > 0){
            echo '<hr />';
            foreach ($this->history as $key=>$val){
                echo '<li>'.$val['sql'].'<br />';
                echo '<strong>'.round($val['time'], 6).'</strong><br /></li>';
            }
        }
    }// showHistory
} // class end
?>