<?php

$GLOBALS['TL_DCA']['tl_layout']['subpalettes']['addJQuery'] = str_replace
(
	'jSource',
	'jSource,jQueryCDN,jQueryCDN_version',
	$GLOBALS['TL_DCA']['tl_layout']['subpalettes']['addJQuery']
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['jSource']['options'] = array (
    'j_local', 'j_googleapis'
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['jQueryCDN'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_layout']['jQueryCDN'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => array(
        'google', 'cloudflare'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_layout']['jQueryCDN_options'],
    'eval' => array('includeBlankOption' => true, 'tl_class' => 'w50 clr'),
    'sql' => "varchar(30) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['jQueryCDN_version'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_layout']['jQueryCDN_version'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => $GLOBALS['TL_JQUERY_VERSION'],
    'reference' => &$GLOBALS['TL_LANG']['tl_layout']['jQueryCDN_version_option'],
    'eval' => array('includeBlankOption' => true, 'tl_class' => 'w50'),
    'sql' => "varchar(30) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['jQueryCDN_own'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_layout']['jQueryCDN_own'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => array('tl_class' => 'w50 clr', 'rgxp' => 'url'),
    'sql' => "varchar(255) NOT NULL default ''"
);