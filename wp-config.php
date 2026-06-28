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
define( 'DB_NAME', 'suryapura_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:/opt/lampp/var/mysql/mysql.sock' );

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
define( 'AUTH_KEY',          '98,0#upD29%?hErePXZR/ppF-oM3/Q]YMabEAzV4#8{Q9G&B)v[UZ@K&tbVnWGHo' );
define( 'SECURE_AUTH_KEY',   '$vAH3UZ}h^vDBZY2YUqeu8 ggRk}1ehz0Wm}`AxENa@gaAGd{/1jD$?/IP{b_3vu' );
define( 'LOGGED_IN_KEY',     '7[])]SsVbV7xJ16DwG4*e1v>PI{M4_/g-KcbSmS9nVQm=`Cvk5CV>U#MKZ9Q|^+<' );
define( 'NONCE_KEY',         'DB}?wZ7:TEqSdM4a/^k16*nbah,B+0<=Y?71@Z1K1?R9 1-u:sg.1&[{K];5]ILo' );
define( 'AUTH_SALT',         ',+hX)2])H@zP} g&4JT%rUynt8+O5J67I*0awX.:BO[19F&d1I,vHXA]#H!q*LY&' );
define( 'SECURE_AUTH_SALT',  'Z.#m5=Vn]WwbGF!rS@JQWW29Z@s3n2rRJD(SBdCCNvkWZ`FiA|.^k86rlnLqV<0!' );
define( 'LOGGED_IN_SALT',    '@}$6-7l.6e$Z)PE%_BU kBohj>rjry2t%A0Qh.)N# Y4nK7r1T^]B=9+FvAna?p]' );
define( 'NONCE_SALT',        'EbHE-UWW/16P~DMV{tNUZLD}Mnf[IywDYOT&%sbBt}J_f?%=Id!L10Di!JTi<2wp' );
define( 'WP_CACHE_KEY_SALT', '-3yDRiI3Y0x$>ljlc4y6D!kkq9/ _kE>ujf9iPq1*+Wj^sG@Ys8a`eDOh?P}1);V' );


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
