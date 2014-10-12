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
define('DB_NAME', 'bitnami_wordpress');

/** MySQL database username */
define('DB_USER', 'bn_wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'f63ae80a0d');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         '8489d72c4d88fab1d50cf8afbb7efaf4524240eeff108eea51f1c7e94c28b7a0');
define('SECURE_AUTH_KEY',  'bff05d0ae5ed084a31aa1ebfa4de2a8a7c9b059c5c7ba8ca2ef5d38f1ac507cd');
define('LOGGED_IN_KEY',    '64beed1405a34bbab6617fff9d28951657f1b2e0a31205715c91b4e7b304438c');
define('NONCE_KEY',        'dec4022b0e972bd4e219e508c2fe367912b52d797f2ab19d29f54ff700ed9fbd');
define('AUTH_SALT',        'c6e989ba7be9ac308d8b9adba38f7de2c4f0266eb67d83476d54fbde3e5c9d24');
define('SECURE_AUTH_SALT', 'be54bf35add4f36a38d38b7038226ac8a7f5d7160585b53b068cdd652b9f6fa7');
define('LOGGED_IN_SALT',   'a1641df58815e2cd682ab155afd4de7d1ed62ea68c841b06751109da2b9f1b87');
define('NONCE_SALT',       '359010f0a454709f5cd38444724bd191efbcd9e69cea2b757794f1b655cbd8f8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', 'C:/xampp/apps/wordpress/tmp');

