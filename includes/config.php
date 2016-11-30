<?php 

//This file contains configuration settings, like database settings
//For security reasons, this file should be placed in webroot

// Define project status
define('PROJECT_STATUS','development');

// Language settings (Dutch)
setlocale(LC_ALL, 'nl_NL');

// Database settings
//define('DB_HOST','localhost');
//define('DB_NAME','19940_myband');
//define('DB_USERNAME','sjaak2');
//define('DB_PASSWORD','');

define('DB_HOST','localhost');
define('DB_NAME','myband');
define('DB_USERNAME','root');
define('DB_PASSWORD','');

define('NR_ITEMS_PER_PAGE',1);
?>
