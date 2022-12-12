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
define('DB_NAME', 'chosenbyimir.ruc52f1b');

/** MySQL database username */
define('DB_USER', 'ube0caa');

/** MySQL database password */
define('DB_PASSWORD', 'ce7guADOiDSz');

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
define('AUTH_KEY',         '8dY0UZijoKWj1)wEULBUEEWV^g2pQSlZ#CQjC3Da9(y8mgsjkfuqUxUaV&mQAOKw');
define('SECURE_AUTH_KEY',  'n9BQqqsr*yCW2)YpYSy48!RNkpTQGXQ1%YXJZ0b((7r1ROa(K))66hbG61j8j4hU');
define('LOGGED_IN_KEY',    'jLv@yCgoGn9Z*RrU1*&0ONXcfdsP*n6S7di%vN0og3a)Se(G&BJRg9eabLrWe)5G');
define('NONCE_KEY',        '28TlewDT0*gBBPRob%Mo!DuA4s(FKx0@owRhK#fGVPou5)qswmz18GWQLwOoRucE');
define('AUTH_SALT',        'ZNRa#KcpVR103zD!S5q2RRc^!yK6i3DivqD)ecGAqlz&At6J#zGYC*#XD2m#hau3');
define('SECURE_AUTH_SALT', '4QKv3gojn^(KgSgN0YA*4z&MDC3eoGRj5TfU^z*rFd&6sTFnKRltqYpn8ij*t(bw');
define('LOGGED_IN_SALT',   'klXP5kEkL3DXGAz!%i)U8H&yDevVtgQISmu!eqBRcHCrI0BCO%!9xTE(v(QAzkQa');
define('NONCE_SALT',       'u)VAoZAAE@cyzdL^!!y#@cJ6O0YXbMr5&Y8OLswcb0)YhLjytWflDCDX91Qz@7(g');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
?>