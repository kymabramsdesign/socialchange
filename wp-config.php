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
define('DB_NAME', 'socialchange');

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
define('AUTH_KEY',         ':0Sw]dBtqtXoLc4j+!jDc7H|xCSrKnCk3NC}>WHm)2hy+|BCI#z;^jP&xUFg 1%2');
define('SECURE_AUTH_KEY',  '_1v?7.pt1@LJx<Jx[:)A_G=*2tqp&_H^i;PoB00qtF5)S/8L][IyiM<6xl#,:T I');
define('LOGGED_IN_KEY',    '#[p_/}$.[#.e^Fyl <wNj/d*K38wb@6|Nl5B5phL`_j(KF`mV*2F<c%;%YW0*{<2');
define('NONCE_KEY',        'BqY&uU:5c@myANrl}^8(RcN$&, 0rUd/|CCe6&;UX3/(TdsY=dkCYy<fj#~)XWZK');
define('AUTH_SALT',        'mX{cS_NCPr%a0K]6zdEl$w6F3xSBt%iXu/`,`K+E}*MTv*qZ|[$f;]>|M`oB?:N>');
define('SECURE_AUTH_SALT', '!^qY&){rr*40#*bWB#tIP?Tp8D$gp=c^QQyX&Kr4]-5SO>XtGk.T#%(!OMX5L9C!');
define('LOGGED_IN_SALT',   '{<^g%~[wrjJbadaS:**B*1#)Idc0co,a}/mx=o/^>XwVG9R[vzin_Vj:l-DJA!q{');
define('NONCE_SALT',       'vkb xUHX0D/tOp<.Q}:KUT#|la+[fqoT=J(/@%gzB/51@&7SkKE5aO]LDO^Gu~7=');

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
