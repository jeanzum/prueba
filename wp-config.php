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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'a.restrepo');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '}y3.MSPgu/88wVWJ6gP`Q>%yj4zQq|t0a+qsu37X)-`r4_i8Gqn+F-ZYB#35ud2Y');
define('SECURE_AUTH_KEY',  '<%%ed:oVQm!#/T]|u0S(J_f-TowDL 44?*sel-&+mdn78n4!BK _CpW8|qM]`8y5');
define('LOGGED_IN_KEY',    'gA]c27$qycWk]$y+tn9.s^[L;P [UzB3ZPiV N`}vu |BE995P3~MKaL1](oq<wu');
define('NONCE_KEY',        '72s&t-rVWLF2,Z2huWssO{dD*i8-YL33D)!(k<S}kE{s9wAAM_4L0gm`#SisB_n9');
define('AUTH_SALT',        '2pK[09$oRq|UHX*@OVMU(0q1BoT1=#`@b%}Y5Eys #^#4e[M$=gG9?MZ+PzA?Kh-');
define('SECURE_AUTH_SALT', 'J=2d60=V#$r52q_-KqyQBd+cv;b4tkfY|8-z. uA/!eGH#,h:.aPCw|m~7L>Z}Od');
define('LOGGED_IN_SALT',   'bg)>k+8SSZf*id77-;NqQ,Ntea6|L[|eYyO*IK;z*=jX[1{CmX=O]RUz+ fT%<#V');
define('NONCE_SALT',       'XH6 {-OCgR9ygxXCBUgM/@d&GgDt-^IBFwE~yP9S-?Y?kWPK #49QP+CtwMVr)14');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ep_';

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
