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
define('DB_NAME', 'thiga_oz');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '{[n%>R8}yL4z4)J[]j.`t5Z7ZpP+~2-19yxxEpS5/w#NiWhMUM<$9`m`$1AIpR;g');
define('SECURE_AUTH_KEY',  'M5;g }tR3UL<o=KLK:@aTf| H?B35ZY];d qtJ0u^zBbcRT8[K}|b|4TY[C+-|~7');
define('LOGGED_IN_KEY',    '/0g[e9%=Q Pqr%u}H`z:GOsAxVO&P4=m-21R}zh`@)D5WNnOz;Z8G&3Z.0M] |Qh');
define('NONCE_KEY',        '``/)@J~Xsc?A5V2E8#&N,It}5Ke}vm*]2HXm-vP>Op]{DH/!0jm{;&IkRjbpta7c');
define('AUTH_SALT',        '6;iQyzeqp%8t&~R#&^29nF9WF,^EDt?(=eA?H54 SLd_aS?l-F#;KicGI.7DZiJS');
define('SECURE_AUTH_SALT', 'uX3Hp]gcG4BYqh.uNG{OTC{Y?DpLq!M|~d$Ffa&_oC|X&i)QPRo;:~[=uRGjU=v*');
define('LOGGED_IN_SALT',   'UcM_Vi/2X6ycpS&ayt1CXb39^iR[vvr=Z0(R:9<RY~K7te}>MK+0rj3{(0QkD^=W');
define('NONCE_SALT',       'z:tD3WVYI#@[^,GUXaJ5ikI*@z`VeL!jCcngD;P#UnX#M^9MA6ZT^CPBWl}RQlp[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'thigaOz_';

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
