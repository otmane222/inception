<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'l4Cep%nf(AsHL??CB,1jMgv0pUl-5Q!v3+{Qq|43QxSr-1VEpLXZxiW{QhoTDdRq' );
define( 'SECURE_AUTH_KEY',   '=80:{>o:I!;]Xm9cT,xHTVnzUG`,V4_-[I&FJI:%j9G7;E$c^K]J+jHvojYHyxmL' );
define( 'LOGGED_IN_KEY',     '9St{:CqV)FNl,FWDAq}dK@-ROm&[05$iRj^X,sgPnJ]P||#r=N]d>? ne 6S0Kba' );
define( 'NONCE_KEY',         '+QG2`KU,axr1 7c8x?LO2+rF,&GhX15hM-prfYu9s;h[byt#kBt/bM6~,d]Dd;U2' );
define( 'AUTH_SALT',         '{d%O>4OE%=&7?^;;)Mw.U:$%3rUjg5W@e6]e6>fkS^xt6:&5H~&OQ+0dIxkMXtcQ' );
define( 'SECURE_AUTH_SALT',  'a6wm7=7fXJx3Jo)v}7zxA+.<1xi|^WD=^U=,aflqBXaKdDU!P:>Yuf^Mx/9n{U2B' );
define( 'LOGGED_IN_SALT',    '.RR)QofK-c^4NGAk5&8<?v4*LbsEQM*Gw8&]R}ybBz>+[w]]<d_(dE~%>+zffpE2' );
define( 'NONCE_SALT',        'rlb?Udf!8H0&>5Jg8Pw(`@9:hR/DGdvMDh7!xJS&`kv{89_FiGeVK %y/@d.ytZk' );
define( 'WP_CACHE_KEY_SALT', '{2lP$+Swzv~0I@pf sU;Vp?-,x7lWn`m;)O*Qgo]vG/^_3gH;5;iu%G;HFA[cwzF' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
