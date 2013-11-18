<?php
$aModule = array(
    'id'          => 'mylastseen',
    'title'       => 'Last Seen Products for Azure',
    'description' =>  array(
        'de'=>'Zuletzt angesehene Produkte f&uuml;r Azure Theme',
        'en'=>'Last Seen Products for Azure Theme',
    ),
    'version'     => '1.1',
    'url'         => 'http://zunderweb.de',
    'email'       => 'info@zunderweb.de',
    'author'      => 'Zunderweb',
    'extend'      => array(
        'details' => 'mylastseen/controllers/mylastseen',
        'alist' => 'mylastseen/controllers/mylastseen',
        'start' => 'mylastseen/controllers/mylastseen',
    ),
    'blocks' => array(
        array('template' => 'layout/sidebar.tpl', 'block'=>'sidebar_boxproducts', 'file'=>'out/blocks/mylastseen.tpl'),
    ),
    'settings' => array(
        array('group' => 'mls_settings', 'name' => 'iMlsNumberOfHistoryArticles', 'type' => 'str',  'value' => '4'),
    ),
);