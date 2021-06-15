<?php
/*
 * @author Tikpub
 * @website http://www.Tikpub.com
 * @facebook https://www.facebook.com/Tikpub
 * @twitter https://twitter.com/thesoftwareguy7
 * @googleplus https://plus.google.com/+thesoftwareguyIn
 */

// dont add a trailing / at the end
define('HTTP_SERVER', 'http://localhost:8888');
// add slash / at the end
define('SITE_DIR', '/simple-website/');

// database prefix if you use
define('DB_PREFIX', 'mp_');

define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_HOST_USERNAME', 'yours');
define('DB_HOST_PASSWORD', 'yours');
define('DB_DATABASE', 'simple-website');

define('SITE_NAME', 'Amazing website');

// define database tables
define('TABLE_PAGES', DB_PREFIX.'pages');
define('TABLE_TAGLINE', DB_PREFIX.'tagline');
?>