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
define('DB_NAME', 'rsportal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mobile123');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:3306');

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
/* Substitute in built apliances */
define('AUTH_KEY',         'f8512d8f898046be6639c3ed1e538210ebced426b5cb4728ad058bbd69dd7ccc');
define('SECURE_AUTH_KEY',  '14e1455bb9c781326a27ccee46bfaf31c99e028c205afc004cf8a1803baf937f');
define('LOGGED_IN_KEY',    '2f8660a98142e195d197baa0c677146aabdee4d795f84787b7ba2be690f65108');
define('NONCE_KEY',        '4d99ccfaba1497ac25a2c30ca7d48e4f53c23abb70a622fc565efac6306a8985');
define('AUTH_SALT',        '1a2a16abc67bc5991ec057ff54e5a1db9304594c3d2e41e164eac14e184bcf87');
define('SECURE_AUTH_SALT', '9ed6d8ec9519cd32c4f3f33e298cb867214e2538ad134c6b44cd5d05f70d4b25');
define('LOGGED_IN_SALT',   'ad1a5930e618ccdda84d02b99fe5a3ea11704643fb99eafe4f5c91c8d1c675b5');
define('NONCE_SALT',       '70a0c08431db4f85e8208cb4d5b7a92c13531cfac5a708d69484bf4534d79dcf');

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
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

define('WP_SITEURL', 'http://www.iith.ac.in/rsportal');
define('WP_HOME', 'http://www.iith.ac.in/rsportal');
//define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');
//define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/rsportal');
//define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/rsportal');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', '/tmp');

