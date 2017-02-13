<?php
/**
 * Created by PhpStorm.
 * User: roger.kikkas
 * Date: 13.02.2017
 * Time: 9:45
 */
// defineerime eraldaja template abil
$sep = new Template('lang.sep');
$sep = $sep->parse();
$count = 0;
// koik keeled meil on konfis keelemassiivis kujul - et=>nimi
foreach($siteLangs as $lang_id = $lang_name)
{
    // suurendame keele eraldajate joonistamiseks
    $count++;
    // kui tegu on aktiivse keelega, kasutame aktiivne mall
    if($lang_id == LANG_ID)
    {
        $item = new Template('lang.active');
    }
    // muidu tavaline mall
    else
    {
        $item = new Template('lang.item');
    }
    // keelte vahel klopsamiseks oleks vaja tekitada link, mille sisse lahevad
    // add massiivina keel, aie massiivina tegevus, menuu element,
    // not massiivina keelevalik
    $link = $http->getLink(array('lang_id'=>$lang_id), array('act', 'page_id'), array('lang_id'));
    $item->set('link', $link);
    $item->set('name', $lang_name);
    $tmpl->add('lang_bar', $item->parse());

    // keele eraldamiseks paneme separaatori, aga viimase keele pärast ma separaatori ei pane
    if($count < count($siteLangs))
    {
        $tmpl->add('lang_bar', $sep);
    }
}
?>