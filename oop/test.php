<?php
/**
 * Created by PhpStorm.
 * User: roger.kikkas
 * Date: 12.01.2017
 * Time: 11:19
 */
// use text object class
require_once 'text.php';
require_once 'ctext.php';
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
// create another object
$sentence2 = new text ('Tere koos konstruktoriga');
// object output
echo '<pre>';
print_r($sentence2);
echo'<pre>';
// object output by show method
$sentence2->show();
echo '<hr/>';
// create a third object
$sentence3 = new ctext('musta värvi tekst');
// object output
echo '<pre>';
print_r($sentence3);
echo'<pre>';
// object output by show method
$sentence3->show();
echo '<hr/>';
// create a fourth object
$sentence4 = new ctext('punase värvi tekst');
// set up color
$sentence4->setColor('#FF0000');
// object output
echo '<pre>';
print_r($sentence4);
echo'<pre>';
// object output by show method
$sentence4->show();
echo '<hr/>';
?>