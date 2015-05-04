<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$active_group = 'expressionengine';
$active_record = TRUE;

$db['expressionengine']['hostname'] = 'localhost';
$db['expressionengine']['username'] = 'eeDemo';
$db['expressionengine']['password'] = 'P@ssw0rd';
$db['expressionengine']['database'] = 'eeDemo';
$db['expressionengine']['dbdriver'] = 'mysql';
$db['expressionengine']['pconnect'] = FALSE;
$db['expressionengine']['dbprefix'] = 'exp_';
$db['expressionengine']['swap_pre'] = 'exp_';
$db['expressionengine']['db_debug'] = TRUE;
$db['expressionengine']['cache_on'] = FALSE;
$db['expressionengine']['autoinit'] = FALSE;
$db['expressionengine']['char_set'] = 'utf8';
$db['expressionengine']['dbcollat'] = 'utf8_general_ci';
$db['expressionengine']['cachedir'] = '/Applications/XAMPP/xamppfiles/htdocs/eeDemo/system/expressionengine/cache/db_cache/';

/* End of file database.php */
/* Location: ./system/expressionengine/config/database.php */