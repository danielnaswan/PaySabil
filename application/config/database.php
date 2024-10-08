<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				 (and in table creation queries made with DB Forge).
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/


/********************************************************************************************
Connection => smp (the smpli database !!!)
********************************************************************************************/
/*$hostname = '  (DESCRIPTION=
					(ADDRESS=(PROTOCOL=TCP)(HOST=192.168.240.61)(PORT=1521))
    			(CONNECT_DATA=
    			(SERVICE_NAME=xepdb1))
				)';


$username 	= 'smp';
$password	= 'smpli';


$active_group = 'default';
$active_record = TRUE;

$db['default']['hostname'] = $hostname;
$db['default']['username'] = $username;
$db['default']['password'] = $password;
$db['default']['database'] = '';
$db['default']['dbdriver'] = 'oci8';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE; //asal TRUE
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;*/

$active_group = 'default';  // Specifies which database connection to use.
$active_record = TRUE;      // This is for Active Record (Query Builder) support.

$db['default']['hostname'] = '161.139.246.60';  // The IP address of your database server.
$db['default']['username'] = 'paysabil';        // Database username.
$db['default']['password'] = 'xs2paysabil';     // Database password.
$db['default']['database'] = 'paysabil';        // The name of your database.

$db['default']['dbdriver'] = 'mysqli';          // The database driver, 'mysqli' is correct for MariaDB.
$db['default']['dbprefix'] = '';                // Prefix for table names, if any. Leave blank if not used.
$db['default']['pconnect'] = FALSE;             // Persistent connection. FALSE is usually fine.
$db['default']['db_debug'] = TRUE;              // Set to TRUE to display database errors during development.
$db['default']['cache_on'] = FALSE;             // Set to TRUE if you want to enable query caching.
$db['default']['cachedir'] = '';                // Path to your query cache directory (if caching is enabled).

$db['default']['char_set'] = 'utf8';            // Character set, 'utf8' is a common and safe choice.
$db['default']['dbcollat'] = 'utf8_general_ci'; // Collation for the database.

$db['default']['swap_pre'] = '';                // Swap prefix. Typically used in migrations, usually not needed.
$db['default']['autoinit'] = TRUE;              // Automatically initialize the database.
$db['default']['stricton'] = FALSE;             // Set to TRUE if you want to enforce strict SQL mode.

	//echo '<pre>';
  //print_r($db['default']);
  //echo '</pre>';


/* End of file database.php */
/* Location: ./application/config/database.php */