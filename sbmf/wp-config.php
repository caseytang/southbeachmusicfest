<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'sbmf');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ' lVTV~36E=BUP<RgO3!+,*xPx_/|R+hPnPD&!FI%$epO0q.XvL51k*u8-Hz/bQ4T');
define('SECURE_AUTH_KEY',  '_Ac=9*q47_ Hz#rVFD;qM$asM5lX0B$++TL<ANwFN+-ha&{5-&&V)TT;/ykVZnAt');
define('LOGGED_IN_KEY',    '<pQ6%rlC9Z#(dvX7QM9]2:m-%_(@K*tzrR5NQjYLN vjHadu+8_?6g]m1{w5$i5y');
define('NONCE_KEY',        '%7v|H4K0g{(2@HP]4=2*7asmemMR`/>w Uz~}Fi&ui&v7$>C:$r]HTDz8+34>1HA');
define('AUTH_SALT',        'mb^~=(]UjD:xJ`9i{T9ca|k%0~$:iOH|BsMQz[#}oji*H4$c>;&U U7D>K?qy.O|');
define('SECURE_AUTH_SALT', 'jnfkW}|Dut/1&~|OV+R/cmYI;ZkNC}gOIJ%`<v-.Ju {/fv%dmBHXu[_wj!OEUPQ');
define('LOGGED_IN_SALT',   '4mThy9YWW *=0<70/g59Rc5J0ddC0?dfFSx=CNzaPG7nwYK;wt_|tg.~^XDTj2UR');
define('NONCE_SALT',       '8g+pT`#L6?|oe0p|5;m !{RPM| A>LDy&d;Azv@^#f:Xn_DsY+p{]lgj-7Lob@0?');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
