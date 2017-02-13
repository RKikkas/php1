<?php
/**
 * Created by PhpStorm.
 * User: roger.kikkas
 * Date: 13.02.2017
 * Time: 9:45
 */
// define separator with template
$sep = new Template('lang.sep');
$sep = $sep->parse();
$count = 0;
// lang massive
foreach($siteLangs as $lang_id => $lang_name){
    // add separators
    $count++;
    // if this langugage is active, use active template
    if($lang_id == LANG_ID){
        $item = new Template('lang.active');
    }
    // else use regular template
    else{
        $item = new Template('lang.item');
    }
    // add menu item to switch langugages
    $link = $http->getLink(array('lang_id'=> $lang_id), array('act', 'page_id'), array('lang_id'));
    $item->set('link', $link);
    $item->set('name', $lang_name);
    $tmpl->add('lang_bar', $item->parse());
    // add seprator to separate languages
    if($count < count($siteLangs)){
        $tmpl->add('lang_bar', $sep);
    }
}
?>