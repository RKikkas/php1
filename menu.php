<?php
/**
 * Created by PhpStorm.
 * User: roger.kikkas
 * Date: 19.01.2017
 * Time: 10:36
 */
// create menu and item objects
$menu = new template('menu.menu');
$item = new template('menu.item');
// add content to menu item
$item->set('name', 'Esimene leht');
$link = $http->getLink(array('act'=>'first'));
$item->set('link', $link);
// add item to menu
$menu->set('items', $item->parse());
//
// add content to menu item
$item->set('name', 'Teine leht');
$link = $http->getLink(array('act'=>'second'));
$item->set('link', $link);
// output objects
// menu
echo '<pre>';
print_r($menu);
echo '</pre>';
// item
echo '<pre>';
print_r($item);
echo '</pre>';
?>