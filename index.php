<?php
// index.php
/**
 * Created by PhpStorm.
 * User: roger.kikkas
 * Date: 12.01.2017
 * Time: 12:58
 */
// create an template object
define('CLASSES_DIR', 'classes/');
define('TMPL_DIR', 'tmpl/');
require_once CLASSES_DIR.'template.php';
// and use it
// create an empty template object
// set up the file name for template
// load template file content
$tmpl = new template('main');
// control the content of template object
echo '<pre>';
print_r($tmpl);
echo '</pre>';
?>