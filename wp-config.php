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
if($_SERVER['HTTP_HOST'] == 'localhost'){

define('DB_NAME', 'tr_portfolio');

/** MySQL database username */
define('DB_USER', 'tr_portuser');

/** MySQL database password */
define('DB_PASSWORD', 'bTdG46eqDr2WNRnT');

define('WP_DEBUG', true);
}

else{

define('DB_NAME', 'trose04_portfolio');

/** MySQL database username */
define('DB_USER', 'trose04_portuser');

/** MySQL database password */
define('DB_PASSWORD', 'VNwDn29L30kc');

define('WP_DEBUG', false);

}

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
define('AUTH_KEY',         'fv3kzKdp1~p]QYDF-g4{|y </3j|[<_{[FYA)zh{}vY9,~:5k*t7kakv5tam|5p$');
define('SECURE_AUTH_KEY',  'gFW%)V`5(%KFo*6`ACQl(W@SI~{IiNk5~yuo?o~6~|tRd.u}z ;hnYrbi=*Pp4r#');
define('LOGGED_IN_KEY',    'Sfgz(]{jHc-t|s,pMYrSxpwK(t;f3(B2z[K(*r}OQ188XrYlFT.qMG`!t$$2r*z^');
define('NONCE_KEY',        'Bd++G0^F#1,y& BpS-|o6l-i5-z7cV$jCbrWOU;NfyEp~,n]|Q|2}MU<?8$A+K|=');
define('AUTH_SALT',        'uN{%c1I<.wU+Rt{6ijD7yPy|)sl^n)7K-NFTx{O2oxyfQsO=gg~|cu--#+c%FMO}');
define('SECURE_AUTH_SALT', 'hMQ)Fd_eeDw/)R/-z0>x.,Pa|x[xU5;DDmmlu%Ku4{N/~lX.N:8O<|b-2)`.YPHC');
define('LOGGED_IN_SALT',   '#(-|=B_I]m+j_PHnBX@=BReO,i<Pf-~+=6f~7,5+k/8,u;Aa-GM3]L_B=wya(%XM');
define('NONCE_SALT',       'Pp7L4T4Y*U:otv_Pi;{BM<EY}H_>~@!5=ErV+1.MOM-?s(~,#b:$Jt^2-Q(-a|Aq');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'port_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
