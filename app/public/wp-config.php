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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'aE?8l%HfhG3vjl=0EY-pA>C8nn5A`J2u%Y2,yp/8jQo6`487.%lrh%dn`S}~CLk ' );
define( 'SECURE_AUTH_KEY',   'y,]Pn}/^L$41~>VrONz6z}YmvMTu:f8.r(0^~1.uBX-SbQYClf<jr.T!GQ-Vg|?0' );
define( 'LOGGED_IN_KEY',     'ArV~=c$+3F-5BOq|F1Sp)DHY!n-KO*<*o4-fV<!H 4,Q;H[:SN828~cz!G5vPrkl' );
define( 'NONCE_KEY',         'uA0+jyjOZ]9,g8tKuMmme>RCy8MIDP%(X_.jdDG=Y*A=:UJ0sViR{(Qv^ {|||<G' );
define( 'AUTH_SALT',         '.}N1XeV1d~yIZN2$MB;Qy7j72]aryH$fcd]u&Hft$:R}=OJOU?cV*cA*Q;&qTdDX' );
define( 'SECURE_AUTH_SALT',  'a;RyA2&2/`[PtnVI,&l%k~pQIC9j{N7f6sU8Hu($mA<v@C&`0BZ8HMy4N]$_*f?M' );
define( 'LOGGED_IN_SALT',    ')@K`*W;:(y,!5-{?o^%-6uL-R.[xPVD|8=fLa?%dq)/i|4^Lu%MQ(4s.KcR0`.*J' );
define( 'NONCE_SALT',        'dTLohmG(r)6__u<@N,Ug:?h3[)#4ujXIPQ>d[%{f[YNAfq6.[}V| /Qyf2#^B0U|' );
define( 'WP_CACHE_KEY_SALT', '<Gi(PNRc;|[s_cR!;TMlD+@d!MHN8 iAP&(_,7v(]soFln;:g,r+efEAp$:!w.]v' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
