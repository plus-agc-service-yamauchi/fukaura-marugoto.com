<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
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
define('DB_NAME', 'sddb0040355796');

/** MySQL database username */
define('DB_USER', 'sddbNDkyOTA4');

/** MySQL database password */
define('DB_PASSWORD', 'L&M73NRY');

/** MySQL hostname */
define('DB_HOST', 'sddb0040355796.cgidb');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'NqI2W1Yg}?wlDz?<}0&(Gt]9`Na1SK3>gUA]lM;^w(Yt|E2MJFl&Rt}xR? bzIR?');
define('SECURE_AUTH_KEY', 'nfk2ikVa0I-8C#taIK#:17_x!38QZz?p7oy7O/KI}DlNf?y/.@vti<Nyw@,l<.`[');
define('LOGGED_IN_KEY', '!W&6z1k>eNj<(a_8KOfAW8:N5{ngM$lu<vVI_K@JzF>)sWg{!JxE>(?S>|q3/+.-');
define('NONCE_KEY', 'EE]Tt}Y;:Ab*xu@LM1vx:l0#KfD`I!CM%GiqvkIhc`Ar{(sDEnGh_nQbWA_-(~0}');
define('AUTH_SALT', 'g/N3$-lpoM+9@~|oMwZ?d*kNf[t4DQDCLHG2q3b7_KUF>U;cn/%)*6jfDG3hgwGP');
define('SECURE_AUTH_SALT', 'H~#=;{W%vptHny|TT~VF<;9#b571FR.Ti3YKeuVIp-s|pPPa,W~TWiBOEB+Z)klH');
define('LOGGED_IN_SALT', '%}d*;IMl_$Oi}ffaS9E)e><s~KyErKjF^%I,y!(nosbEv]|c ujf$z}!M~cjPyZ}');
define('NONCE_SALT', 'TlnxH&6=?Gp.p}MqwZY/KY_z[CS-,KLw~/yZ9}TpM]aZ5Y|e 9=*Px~ImN!fAmLA');
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
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
