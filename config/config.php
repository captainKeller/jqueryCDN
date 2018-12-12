<?php


# HOOKS
$GLOBALS['TL_HOOKS']['generatePage'][]          = array('PineappleSquad\changeJqueryCDN', 'jquerycdn');
$GLOBALS['TL_HOOKS']['getPageLayout'][]         = array('PineappleSquad\changeJqueryCDN', 'jqueryDisableTmp');

$GLOBALS['TL_JQUERY_CDN'] = array(
    '3.3.1' => array(
        'google' => 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',
        'cloudflare' => 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'
    )
);
$GLOBALS['TL_JQUERY_VERSION'] = array(
    '3.3.1'
);