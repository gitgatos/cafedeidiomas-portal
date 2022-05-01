<?php
/**
 * The base configurations of RosarioSIS
 *
 * You can find more information in the INSTALL.md file
 *
 * @package RosarioSIS
 */

/**
 * PostgreSQL Database Settings
 *
 * You can get this info from your web host
 */

// Database server hostname: use localhost if on same server.
$DatabaseServer = 'ec2-52-5-110-35.compute-1.amazonaws.com';

// Database username.
$DatabaseUsername = 'ugjksgkihqaqqs';

// Database password.
$DatabasePassword = '274016c96a2ef336fc74316a8a9038d8e75bf5e9ddb9c973c8b02a3cd05db450';

// Database name.
$DatabaseName = 'd2f8s0959f3bm1';

// Database port: default is 5432.
$DatabasePort = '5432';


/**
 * Paths
 */

/**
 * Full path to the PostrgeSQL database dump utility for this server
 *
 * @example /usr/bin/pg_dump
 * @example C:/Progra~1/PostgreSQL/bin/pg_dump.exe
 */
$pg_dumpPath = 'C:\Bitnami\wappstack-5.4.45-1\postgresql\bin\pg_dump.exe';

/**
 * Full path to wkhtmltopdf binary file
 *
 * An empty string means wkhtmltopdf will not be called
 * and reports will be rendered in HTML instead of PDF
 *
 * @link http://wkhtmltopdf.org
 *
 * @example /usr/local/bin/wkhtmltopdf
 * @example C:/Progra~1/wkhtmltopdf/bin/wkhtmltopdf.exe
 */
$wkhtmltopdfPath = 'C:\wkhtmltopdf\bin\wkhtmltopdf.exe';


/**
 * Default school year
 *
 * Do not change on install
 * Change after rollover
 * Should match the database to be able to login
 *
 * @see School > Rollover program
 */
$DefaultSyear = '2021';


/**
 * Email address to receive notifications
 * - new administrator account
 * - new student / user account
 * - new registration
 *
 * Leave empty to not receive email notifications
 */
$RosarioNotifyAddress = '';


/**
 * Email address to receive errors
 * - PHP fatal error
 * - database SQL error
 * - hacking attempts
 *
 * Leave empty to not receive errors
 */
$RosarioErrorsAddress = '';


/**
 * Locales
 *
 * Add other languages you want to support here
 *
 * @see locale/ folder
 *
 * For American, French and Spanish:
 *
 * @example [ 'en_US.utf8', 'fr_FR.utf8', 'es_ES.utf8' ];
 */
$RosarioLocales = [ 'es_ES.utf8' ];
