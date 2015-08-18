<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_sstour5885');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         '&quQt8^!>x[Gqa>f&RVjd{k-WtTL`~5#`%jZEv;yUrwauwT79&o[KN%tGcfsKGF@');
define('SECURE_AUTH_KEY',  '?=}^w<Ca^W_K>gWY.R)X<2Uo`y4*YAEu(LWHtmtz/Ja^jTI,A& Wn)Fx{_dH_s8X');
define('LOGGED_IN_KEY',    'QcHqtd;/+T|sB!|FNYG@<4Vo^)$,ua,rHdkkoFq#++4|SxB,gYH$W!_h#(N*i>8f');
define('NONCE_KEY',        'MK{Kc%{3fTv`6HO>cpS0Ky-<2 YRbKA*$z+36c-VHOKx}b~h]bm;,03H&:*2Yk/;');
define('AUTH_SALT',        '|UnD]^?Ms4Yz-MPMM#!al;V-Yzg!AuemqsU1KNY2OYO{2g]^-@9_Dj@o^z0x& dD');
define('SECURE_AUTH_SALT', 'Az/-YBuTh-1~5R 1^Boq]-*jk>cEWwHnQFF+:m8:D}O5dXFK;%}`Yq??c-pO8M<_');
define('LOGGED_IN_SALT',   '1Kx]`b;J]MCiX=40y-EYzSqV|?-+- PB(f#@+N7VKV^;s|rf/u,a7_MENCgga/-H');
define('NONCE_SALT',       'PKLwB2#JC{,.lzw%(y=l;k,yctH-yFI^U.7x:=n-{@D.c-Ny:-rOXafC,-{gxEOU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xp_';

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
