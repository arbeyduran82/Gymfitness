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
define( 'DB_NAME', 'gymfitness' );

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
define( 'AUTH_KEY',         'KYgYCS/bQYC*, [RJfibf[WPtjz764mfu2jJzO=DfqZ:@oUS=Wca&7`2{n~VmJG9' );
define( 'SECURE_AUTH_KEY',  '0eDCg%Dhm+v>.81s64dJHux91z_${5K}1lwZ$nfxgW/Cq[}<fH3~pWO11sY-}ydw' );
define( 'LOGGED_IN_KEY',    'Oi`;Ag.{Pd+nOcSRy-GF-+~XGb$Jv/tDgf]t. ]lX+Ll~8<yYIf37G*)3#|CK|7F' );
define( 'NONCE_KEY',        '<ht%;%*4:!O1$s_PKMPLY2k8CuB+%A<x@sga|17IoM>=@,Ml3H/x5bMCOFU#0vKF' );
define( 'AUTH_SALT',        '?rH u_YEn._/a<w=}DCfyzF2*$_4nHUrIS,23&?%v*SB7213J30TrBk&~_!0g}0]' );
define( 'SECURE_AUTH_SALT', 'rJ(0GSJ8s-jUg^HjUu^9YrOi8~=RYboS$2|JmzUmu*E8-(Hpsa2R@G7_70&)!H+!' );
define( 'LOGGED_IN_SALT',   '.7 *RpFDtI(1f:d V}CW6fHht5iS>/2C~>x5hNVf4v2yy*~TxZ*q(iY#x)=Aa:8S' );
define( 'NONCE_SALT',       ')ESByz7EZ66&Wh}pmgh0f9zQZ9l(lMVUwGAZ4coU=k@l[I#iq&*T.7D+]89Z*YLq' );

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
