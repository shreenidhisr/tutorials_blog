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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tutorials' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'O$7TR/dZ0MPpII`haw+[seE>S,O3SW0yu}x9@Z$uU3ITi[XcCNDLH<2FG.S)e,tR' );
define( 'SECURE_AUTH_KEY',  '.G?`El71_w]Kx|E=20FoHLx^^SC5s6HDnrg$!E,jcN},kGzH9oP}XE*yct<_Jtn&' );
define( 'LOGGED_IN_KEY',    '{bJU`AR=ky6DqN,n6L$_C$g:CqyoSKyP3wEf=FC,FdfOuSZ$p R3t,JX@n@|KHk@' );
define( 'NONCE_KEY',        'lr10;F?pGKlG0m&?Z8[+>#DU~[L,~C%`PZ/Qp}ytq`hbLG}eR//Fh/P)jsiV9%,c' );
define( 'AUTH_SALT',        ':;<m5Qphr4!$<t8Ygyh|79=Zui5()Md-*]0Nh9<)BLLX9^t5SsblkdHPRMT}s=P9' );
define( 'SECURE_AUTH_SALT', ')|f(O]Bm_Gw;W!#Nc@>{,x^8Sn~.c?C!9GO}S%l:,X={A2P_i0#X0/eMr+>fSiuP' );
define( 'LOGGED_IN_SALT',   '_&W)Sx:9(Y}B4*eURWVJ8ycBk[d5d8V*Va_f[S*i:nZh=LXwL<HB;{2sCNVkSP$.' );
define( 'NONCE_SALT',       '^4:j#uW ot6cOU`T#TDg_FTzn1a;/Jq }dq&6,dWxpS)i:Xt_{8)^jg3^=#g%,ce' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
