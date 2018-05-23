<?php
/**
 * This script provides a convienent method to call the proper common.php
 *
 * @package phpLDAPadmin
 */

/**
 */

include_once './filter_data.php';

if (! defined('LIBDIR'))
	define('LIBDIR',sprintf('%s/',realpath('../lib/')));
require_once LIBDIR.'common.php';
?>
