<?php
// index.php
/**
 * Created by PhpStorm.
 * User: roger.kikkas
 * Date: 12.01.2017
 * Time: 12:58
 */
// import configuration
require_once 'conf.php';
// import act description
require_once 'act.php';
// create and template object
// and use it
// create an template object,
// set up the file name for template
// load template file content
$tmpl = new template('main');
// add pairs of temlate element names and real values
$tmpl->set('style', STYLE_DIR.'main'.'.css');
$tmpl->set('header', 'minu lehe pealkiri');
// menu testing
// import menu file
require_once 'menu.php';
// end of menu
$tmpl->set('nav_bar', $sess->user_data['username']);
$tmpl->set('lang_bar', 'minu keeleriba');
// $tmpl->set('content', 'minu sisu');
$tmpl->set('content', $http->get('content'));
// output template content set up with real values
echo $tmpl->parse();
// database object test output
$sql = 'SELECT NOW()';
$res = $db->getArray($sql);
$sql = 'SELECT NOW()';
$res = $db->getArray($sql);
$sql = 'SELECT NOW()';
$res = $db->getArray($sql);
// control query log output
$db->showHistory();
// control session output
$sess->flush();
echo '<pre>';
print_r($sess);
echo '</pre>';

?>