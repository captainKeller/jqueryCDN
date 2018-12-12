<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2018 Leo Feyer
 *
 * @license LGPL-3.0+
 */

/**
 * Register the namespace
 */
ClassLoader::addNamespace('PineappleSquad');

/**
 * Register the classes
 */
ClassLoader::addClasses(array
	(
		// Classes
		'PineappleSquad\changeJqueryCDN' => 	'system/modules/ps_jquerycdn/classes/jqueryCDN.php'
	)
);


