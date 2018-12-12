<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2018 Leo Feyer
 * 
 * @copyright	TN34.DE GmbH & Co. KG 2018
 * @author		Jonas Nickel <jonas.nickel@tn34.de.de>
 * @package		custom
 * @subpackage	
 * @filter		Hooks
 * @link		http://contao.org
 */

namespace PineappleSquad;

class changeJqueryCDN extends \PageRegular
{
    protected $addJQuery;

    public function jqueryDisableTmp ($objPage, $objLayout, $self) {
        if ($objLayout->addJQuery != 1 || !$objLayout->jQueryCDN) return;
        $objLayout->addJQueryTmp = $objLayout->addJQuery;
        $objLayout->addJQuery = '';
        $objLayout->psCdn = true;
    }

    public function jquerycdn ( $objPage, $objLayout, $self) {
        if (!$objLayout->psCdn || !$objLayout->jQueryCDN) return;
        if ($objLayout->jSource == 'j_googleapis') {
            $self->Template->mooScripts .= \Template::generateScriptTag($GLOBALS['TL_JQUERY_CDN'][$objLayout->jQueryCDN_version][$objLayout->jQueryCDN]) . "\n";
        }
    }
}