<?php
/**
 * Created by PhpStorm.
 * User: roger.kikkas
 * Date: 19.01.2017
 * Time: 10:36
 */
// menu.php - create page menu
// create menu template objects
// for menu and menu items
$menu = new template('menu.menu'); // in menu directory is file menu.html - menu/menu.html;
$menu->set('items',false); // menu is hidden until user is not logged in
$item = new template('menu.item');
// main menu content query
$sql = "select content_id, title FROM content where parent_id='0' and show_in_menu='1'"; //get menu data from database
// define items that are only showed for admins
if(ROLE_ID != ROLE_ADMIN)
{
    $sql .= '  AND is_hidden = 0';
}
$sql .= ' ORDER BY sort ASC';
$res = $db->getArray($sql);
//create menu items from query result
if($res != false){
    foreach($res as $page){
        $link = $http->getLink(array('page_id'=>$page['content_id']));
        $item->set('link',$link);
        $item->set('name',tr($page['title']));
        $menu->add('items', $item->parse());
    }
}
// if user is logged in, let's create the possibility to log out
if(USER_ID != ROLE_NONE){
    $link = $http->getLink(array('act' => 'logout'));
    $item->set('link', $link);
    $item->set('name', tr('Logi välja'));
    $menu->add('items', $item->parse());
}
$tmpl->set('menu',$menu->parse());
// menu item creation - begin
// add pairs of item temlate element names and real values
$item->set('name', 'Esimene leht');
$link = $http->getLink(array('act'=>'first'));
$item->set('link', $link);
?>