<?php
/**
 * Created by PhpStorm.
 * User: roger.kikkas
 * Date: 12.01.2017
 * Time: 12:58
 */
// create and template object
define('CLASSES_DIR', 'classes/');
define('TMPL_DIR', 'tmpl/');
require_once CLASSES_DIR.'template.php';
// and use it
// create an empty template object
$tmpl = new template();
// set up the file name for template
$tmpl->file = 'main.html';
// control the content of template object
$tmpl->file = 'main.html';
echo '<pre>';
print_r($tmpl);
echo '</pre>';


?>