<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bitwise_wp413');

/** MySQL database username */
define('DB_USER', 'bitwise_wp413');

/** MySQL database password */
define('DB_PASSWORD', '53Se96pP6x');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ea2jfgelrkuvjdl4weu4sgmpoatsg3vj44cb6emwkkto9mqkamow0twqakequmkk');
define('SECURE_AUTH_KEY',  'px2nd1klk2emegc1i6hnqzlj99bj8owsu33ehiyrfg2a1zgcyjfqvyqhbgnphjhi');
define('LOGGED_IN_KEY',    'ztzz87g3eqfnmkdgpinx9izz68qfsnwc1nyjvd6fmerxuoo7l9npw48kz1k1wgxe');
define('NONCE_KEY',        '3eidggf4dcvz5uspe7etkkkzvhjddpwo9yz5sqgnltddxoecahnap8tmsbjuls3f');
define('AUTH_SALT',        'xydesvlwqanygbi7iixudxveev1rdu4imz3ezvwxrv5zsutvo2oun6co2rpc6lgk');
define('SECURE_AUTH_SALT', 'js0jrucut4lmd5tw6q8auu2vyxjc3xmcfsevpsosrxyxzlv0z83bqycnqxnk9fid');
define('LOGGED_IN_SALT',   'vwb9udkstdlgu6y4u3tucyabqyxrtcxmazgye6wybaaiosnvmb1pcfledg2ix82c');
define('NONCE_SALT',       'px7qhz1l8r57qfa5clmgak6k3rik6xz8suo5fb81fnhux7wf42cqaarv9s9ynces');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define ('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
