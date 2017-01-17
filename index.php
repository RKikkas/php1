<?php
// index.php
/**
 * Created by PhpStorm.
 * User: roger.kikkas
 * Date: 12.01.2017
 * Time: 12:58
 */
/* echo '<link rel="stylesheet" type="text/css" href="css/style.css">'; */
// create an template object
define('CLASSES_DIR', 'classes/');
define('TMPL_DIR', 'tmpl/');
define('STYLE_DIR', 'css/');
require_once CLASSES_DIR.'template.php';
// and use it
// create an empty template object
// set up the file name for template
// load template file content
$tmpl = new template('main');
// add pairs of template element names and real values
$tmpl->set('style', STYLE_DIR.'style'.'.css');

$tmpl->set('title', 'minu lehe pealkiri');
$tmpl->set('menu', 'minu menüü');
$tmpl->set('nav_bar', 'minu navigatsioon');
$tmpl->set('lang_bar', 'minu keeleriba');
$tmpl->set('content', 'minu sisu');
// control the content of template object
/* echo '<pre>';
print_r($tmpl);
echo '</pre>'; 
*/
// output template content set up with real values
echo $tmpl->parse();
//
// http object testing
echo '<hr />';
// import http class file
require_once CLASSES_DIR.'http.php';
// create http object
$http = new http();
// output http object
echo '<pre>';
print_r($http);
echo '</pre>';
?>