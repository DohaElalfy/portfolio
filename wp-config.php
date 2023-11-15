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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '8Ao>eG,EO#>P-{%^EAt:~fa]W|Ap#Kx&sh1O~R_&`uOiU-=$tUL=A|ouNUG8EU25' );
define( 'SECURE_AUTH_KEY',  'VaW1Ma@[]$/jswIEmuuoZu5H=FY:BvV0<fi]twFN-M=0YhT.|< <=YXfmiJ59BO^' );
define( 'LOGGED_IN_KEY',    '@%u.Ah|LE~=q+l?fi0/Cp(>F}hdCz5~oor}ZL$!24;G}$/|j:LX)<rK-oy{,,`M@' );
define( 'NONCE_KEY',        'Int*9XP*Q$LC3}zPte>dD i6UpD{2WT<v[<doMel/r[QG8MmfZ1=j$i1hO4x-xMc' );
define( 'AUTH_SALT',        '#*a! %1hiyt.}N0%?dk-uQG0rx|5s{b40dS!< olF1o/5~F{= O}m$VI,03&-/XJ' );
define( 'SECURE_AUTH_SALT', '(rxM%ZWh2K_s}@J;InK ,V4+OCwka YU:8@*E!NQhXl6}G`.8`>*<!4J1f3Vy6|5' );
define( 'LOGGED_IN_SALT',   'w_]$HpHj.!x!~0;,+A7#|.cP|s4eDm80HTm/|FPjsF(H;T^OZau(FkV@GS*/tQ@m' );
define( 'NONCE_SALT',       'jCz3SC?Q>ya!4T<]etOD,51.S7H?K:PqUK/wE[GK3Hj;{ @&aqJp*RzcfHgxyv9O' );

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
