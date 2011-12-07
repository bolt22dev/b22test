<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');

/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
|
| loggedin users info
|
*/
define('LOGGED_USERID','loggedinuser');

/*
|--------------------------------------------------------------------------
| Session
|--------------------------------------------------------------------------
|
| Session keys
|
*/
define('SELECTED_OUTLET','selected_outlet');
define('SELECTED_INVENTORY_TYPE','selected_inventory_type');
/*
|--------------------------------------------------------------------------
| Cache
|--------------------------------------------------------------------------
|
| Cache keys
|
*/
define('CACHE_USERINFO','cache_userinfo');
define('CACHE_USERLIST','cache_userlist');
define('CACHE_AGENTINFO','cache_agentinfo');
define('CACHE_AGENTLIST','cache_agentlist');
define('CACHE_OUTLETINFO', 'cache_outletinfo');
define('CACHE_OUTLETLIST', 'cache_outletlist');
define('CACHE_SUPPLIERINFO', 'cache_supplierinfo');
define('CACHE_SUPPLIERLIST', 'cache_supplierlist');
define('CACHE_PROVINCEINFO', 'cache_provinceinfo');
define('CACHE_PROVINCELIST', 'cache_provincelist');
define('CACHE_CUSTOMERINFO', 'cache_customerinfo');
define('CACHE_CUSTOMERLIST', 'cache_customerlist');
define('CACHE_CUSTOMERCATEGORYINFO', 'cache_customercategoryinfo');
define('CACHE_CUSTOMERCATEGORYLIST', 'cache_customercategorylist');
define('CACHE_PRODUCTMASTERINFO', 'cache_productmasterinfo');
define('CACHE_PRODUCTMASTERLIST', 'cache_productmasterlist');
define('CACHE_PRODUCTLINEINFO', 'cache_productlineinfo');
define('CACHE_PRODUCTLINELIST', 'cache_productlinelist');
define('CACHE_INVENTORYTYPE', 'cache_inventorytypelist');
define('CACHE_SOLIST', 'cache_salesorderlist');


/* End of file constants.php */
/* Location: ./application/config/constants.php */
