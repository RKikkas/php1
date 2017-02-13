<?php
/**
 * Created by PhpStorm.
 * User: roger.kikkas
 * Date: 19.01.2017
 * Time: 10:36
 */
// create menu and item objects
$menu = new template('menu.menu');
$menu->set('items', false); //kui kasutaja ei ole sisselogitud, siis menuud ta ei nae
$item = new template('menu.item');

// main menu content query
$sql = 'SELECT content_id, title FROM content WHERE '.
    'parent_id=0 AND '.'show_in_menu = 1';
// mitte adminile naitame ainult lubatud sisu, kui hidden on 1 - nahtav ainult adminile
if(ROLE_ID != ROLE_ADMIN)
{
    $sql .= ' AND is_hidden = 0';
}
$sql .= ' ORDER BY sort ASC';
// get menu data from database
$res = $db->getArray($sql);
// create menu items from query result
if($res != false) {
    foreach ($res as $page) {
        // add content to menu item
        $link = $http->getLink(array('page_id'=>$page['content_id']));
        $item->set('link', $link);
        $item->set('name', $page['title']);
        // add item to menu
        $menu->add('items', $item->parse());
    }
}
// kui kasutaja on susteemisiseselt - kas admin voi tavakasutaja
// tekitame temale voimalus ka valja logida
if(USER_ID != ROLE_NONE)
{
    $link = $http->getLink(array('act' => 'logout'));
    $item->set('link', $link);
    $item->set('name', 'Logi välja');
    $menu->add('items', $item->parse());
}

$tmpl->set('menu', $menu->parse());
?>