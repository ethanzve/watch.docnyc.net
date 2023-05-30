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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'watch.docnyc.net' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ']Y~t=~ZH{WJA[?^iR0J)x[bH .:UGlR:Q~bAznGR/X@{IQAVr&ZF}Zu<de5X$Her' );
define( 'SECURE_AUTH_KEY',  '}R]Be]PO30RgE}}/}&QU)ygqR#7&ZM[G{9Q<iqLDEn*fe.W-H-XA]3Z-P^`){#FZ' );
define( 'LOGGED_IN_KEY',    'H<&5yh|vUOrFzk&A=~-{O/bbEb*L5b7j?zd[/4l9,WkS8Z=IYV#HiSAI`1PN<b,[' );
define( 'NONCE_KEY',        '2-N=BoB#U)C|T!(Zm[5-R&_$#9|`$fl8*-o,4*9xv@U]ZRnXSSmdwEhM=[0Ou84}' );
define( 'AUTH_SALT',        'SxFe,*jgW-zc%HK,~pbIPila_/Tb^kIzt#wHYUvhaw4rmRdkjB_~JIV]69V0Je_{' );
define( 'SECURE_AUTH_SALT', 'LS?piN@URDB|FH C+&;m@IYXsaMqYE~2fr@NBQla7zn8jm?TAYt^G{N<&N=A{pID' );
define( 'LOGGED_IN_SALT',   'rkY{s~<nC(XteV=VM+39>-}`[!>[_{,DB,Aojf0=M+$.z)IqU<-=K.JcAb.B1s{5' );
define( 'NONCE_SALT',       'o$9 JLskx!:}:d$P!,+e<-e?;3w7lpK7Ok|EKpaK+?[Eo3YyG(d;FBZU,gkq52=w' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
