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
define('DB_NAME', 'wordPress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'lRl{rfG3u<Y$s@``3NFb*w7eS/ccojWvCr[FI1c>48[Zf{,)&q;%=rE$t*c.SwgH');
define('SECURE_AUTH_KEY',  'c0wr)&5m}cCzka4rzrb|B@4M4gmmI!KkSw]TU!Qh@,yW=41TVQZA9_nE_c_k5LE&');
define('LOGGED_IN_KEY',    '+pb@}BLlgD/PKPfbQ<hxg3ypmCf0v8L?KPC,eT?yUdM0qj}nk}zY8|A`fG]j+`n,');
define('NONCE_KEY',        'V[A]6>d_$MQ0[!Uj@lD.d3}*4-cX!<z`,W~S`2O-=^7*.e`}T_Q@nLUyPsK3X)b@');
define('AUTH_SALT',        'Ob)Zp!tXB0R_]$R%48x(zOe/cKK}@mE#RhN#y1#cY>aeU-1dcd3BVBpVC|-)ssk^');
define('SECURE_AUTH_SALT', '?Tr:2P[rR!GJ)]ARSw{An5.Cv,GxWyX]#W&:UVS1~ o]t|/}4[,>J;D=5/i}NO[Z');
define('LOGGED_IN_SALT',   '1>9:Bt7|lasH33|P)Qtj{S6aFANg~(Z964Ur;*366J!J<GXvDtq;89Uln@=N`3HG');
define('NONCE_SALT',       'YUaZZv_{3v!/E~s>Ys: Bw:P[$s35:Tp0k9=b|eAYP566fHVN_u`Pv2IvS2;YYhs');

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
