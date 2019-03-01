<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'starter' );

/** MySQL database username */
define( 'DB_USER', 'dna' );

/** MySQL database password */
define( 'DB_PASSWORD', 'PHkE42etinniac' );

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
define( 'AUTH_KEY',         '_t^TJY84m[_NDHx_#zk@4lVa(D5+^45A`|C)ec&B#{qZud$bqt[hz! EH[{ |4EP' );
define( 'SECURE_AUTH_KEY',  '[U|Hl!bgpz8ipba1SMApawp2Ix(J2:s/WeMUqe@(G-g.rCQa+JCuY>U,&Uj.Gmjw' );
define( 'LOGGED_IN_KEY',    'nLlJ^k^~84P%7 (#+g%VOmkv HT7D@(sV5n*P=pn$|2QdQz;OAw//se&Lh`=7:!$' );
define( 'NONCE_KEY',        '_jBY;:o2l^FZ(h<zW9.R9o-=?2#zmi=o2)f-M8riP#.{fh=z,RXL,{GwE_yU.bL{' );
define( 'AUTH_SALT',        'G4lN2<hq4~h/B1dj~uMip:^Qn-Se$=q+Y=dVB5EY+slI;za7v*)AzekI!5{(=K:B' );
define( 'SECURE_AUTH_SALT', 'm#<]{tJj#A`%/lChBtoQ18McG~^uO^xh)s},]H*4C9H(Y|HS]C$VN`7}vC3CS_4&' );
define( 'LOGGED_IN_SALT',   '2O+)@rR_&ALh}Uq-c|j/n,9#U-*%7Ai{#t-K2HyT[t:_0O)<5O# Z3Q[xqGU_>Qc' );
define( 'NONCE_SALT',       '0yvKg%P1%A>^]6G+@WP2VQ_q8h7pn$y{E8+)3+]@Lp|Pk{6Oe[4[fE_O-eejCOtu' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dvk_';

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
define( 'WP_DEBUG', true );
define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

