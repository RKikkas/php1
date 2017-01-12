<?php

/**
 * Created by PhpStorm.
 * User: roger.kikkas
 * Date: 12.01.2017
 * Time: 10:51
 */
class text {// begin of class
    // class variable
    var $str = '';
    // class methods
    // set text method

    // construct
    function _construct($s = ''){
        $this->setText($s);
    }// construct

    function setText($s){
        $this->str = $s;
    }//setText

    // show text output
    function show(){
        echo $this->str.'<br/>';
    }// show
}// end of class
?>