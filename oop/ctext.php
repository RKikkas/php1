<?php

/**
 * Created by PhpStorm.
 * User: roger.kikkas
 * Date: 13.01.2017
 * Time: 12:04
 */
// import text class variables and methods
require_once 'text.php';
class ctext extends text
{// begin of class
    // class variable - color
    var $color = false; // color is not exists

    // methods
    // set up the color
    function setColor($c){
        // set up $c parameter value to
        // $this->color variable
        $this->color = $c; // s
    }// setColor

}// end of class
?>