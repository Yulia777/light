<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'u683361564_nehaw');

/** MySQL database username */
define('DB_USER', 'u683361564_hydeb');

/** MySQL database password */
define('DB_PASSWORD', 'NeLytaDyZy');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'j7i8Ih6E7UcWNWFCBE9YM6IMMBY9ICW0uTNNeR4t3dw86bGkCfaFbDjXV6V5Fkkc');
define('SECURE_AUTH_KEY',  'pCP84MhVTvhL3lHsNVEkAUSMa6qL6Xjg62PNF6Ihj0czSMmF6A44JCvHsiRJYDKk');
define('LOGGED_IN_KEY',    'xlHkMovcZoKLpiNr6TdzIzmOu4ejfP3WOisIo1vd7r2nOIYhGa4mGHyH7HfNqQof');
define('NONCE_KEY',        'CYy1GQMbZFM2cZc5Xr9P2Zg6jruiq460OZE7FAp8xWROmNInNSPZKYSPVrrLW9oq');
define('AUTH_SALT',        'Tr1KRWDl0BHDMaIee9qWploZ3VLiVWv96naKHuyxNoEnhdC8P3xDQ4F2vBjXyuEZ');
define('SECURE_AUTH_SALT', 'iTPLjHoi0BKF4ocZVuJcjlqjD1B4yixqTOhT0ONeBBCYWxDmsE84bKZ473ZBm6ww');
define('LOGGED_IN_SALT',   'BGIfBqC010kJSxKQib4P01X9NgC17XO0NJGUhJ5IRkkEwPXbhhNg4iP5eE7PJMn1');
define('NONCE_SALT',       '7NrF2Amhetn1cEjBLiTQhQIXHXJ881KmdbI25kAnjAlbvcPdD3q58sdhCtjzrR13');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ebh7_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
