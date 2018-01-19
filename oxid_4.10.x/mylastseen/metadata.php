<?php
$aModule = array(
    'id'          => 'mylastseen',
    'title'       => 'Last Seen Products for Flow',
    'description' =>  array(
        'de'=>'Zuletzt angesehene Produkte f&uuml;r Flow Theme',
        'en'=>'Last Seen Products for Flow Theme',
    ),
    'version'     => '1.2',
    'url'         => 'http://zunderweb.de',
    'email'       => 'info@zunderweb.de',
    'author'      => 'Zunderweb',
    'extend'      => array(
        'details' => 'mylastseen/controllers/mylastseen',
        'alist' => 'mylastseen/controllers/mylastseen',
        #'start' => 'mylastseen/controllers/mylastseen',
    ),
    'blocks' => array(
        // block for article details
        array('template' => 'page/details/inc/related_products.tpl', 'block'=>'details_relatedproducts_crossselling', 'file'=>'views/blocks/mylastseen.tpl'),
        // block for article list
        array('template' => 'page/list/list.tpl', 'block'=>'page_list_listbody', 'file'=>'views/blocks/mylastseen.tpl'),
        // block for start
        #array('template' => '???', 'block'=>'???', 'file'=>'views/blocks/mylastseen.tpl'),
    ),
    'settings' => array(
        array('group' => 'mls_settings', 'name' => 'iMlsNumberOfHistoryArticles', 'type' => 'str',  'value' => '4'),
    ),
);
