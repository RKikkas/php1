<?php
/**
 * Created by PhpStorm.
 * User: roger.kikkas
 * Date: 20.01.2017
 * Time: 8:53
 */
// configuration
// create and template object
define('CLASSES_DIR', 'classes/');
define('TMPL_DIR', 'tmpl/');
define('STYLE_DIR','css/');
define('ACTS_DIR', 'acts/'); // acts
define('DEFAULT_ACT', 'default'); // default act or location
define('LIB_DIR', 'lib/'); // lib directory
define('LANG_DIR', 'lang/'); // lang path
// user roles
define('ROLE_NONE', 0);
define('ROLE_ADMIN', 1);
define('ROLE_USER', 2);
define('DEFAULT_LANG', 'et'); //default language
require_once LIB_DIR.'utils.php'; //import useful sql function
require_once CLASSES_DIR.'template.php'; // import template class
require_once CLASSES_DIR.'http.php'; // import http class
require_once CLASSES_DIR.'linkobject.php'; // import linkobject class
require_once CLASSES_DIR.'mysql.php'; // import mysql class
require_once CLASSES_DIR.'session.php'; // import session class
require_once 'db_conf.php'; // import database configuration
$http = new linkobject();
// create database connection object
$db = new mysql(DBHOST,DBUSER,DBPASS,DBNAME);
// create session object
$sess = new session($http,$db);
// language support
// sites used langs
$siteLangs = array(
    'et' => 'estonian',
    'en' => 'english',
    'ru' => 'russian'
);
// get lang_id from url
$lang_id = $http->get('lang_id');
if(!isset($siteLangs[$lang_id])) {
    // if langugage is not supported
    $lang_id = DEFAULT_LANG; // use default
    $http->set('lang_id', $lang_id); // fix used lang_id
}
define('LANG_ID', $lang_id); // define useful constant which describe right now active lang
require_once LIB_DIR.'trans.php';
?>