<?php
/**
 * Created by PhpStorm.
 * User: roger.kikkas
 * Date: 12.01.2017
 * Time: 11:19
 */
// use text object class
require_once 'text.php';
// create objects
$sentence1 =  new text();
// object output
echo '<pre>';
print_r($sentence1);
echo'<pre>';
// set text value
$sentence1->setText('Tere VS16!');
// object output
echo '<pre>';
print_r($sentence1);
echo'<pre>';
// object output by show method
$sentence1->show();
echo '<hr/>';
?>