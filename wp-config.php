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
define( 'DB_NAME', 'leviwp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'I~na#m.x}TI{O!+(NSSDkzs_]tl.3_Ta42t!ydVN<9%U$!ZApok>Sm}D8( haeZ~' );
define( 'SECURE_AUTH_KEY',  '[QJ~1`r[(`v.TbL>@<^+^%h*}VAku*jfVXRf#xSt:He)V3S4<@o}Q<$a)=wz;PwG' );
define( 'LOGGED_IN_KEY',    '_<yT=#1#wPsm%-hv}b.9P=A`ztE;D5{`FEMFCPn4}@Tt2u6IBSFlcA3$l_Xz7{vA' );
define( 'NONCE_KEY',        '2I!AgVc&#8l/Av;K!,;*Dq3W[KFkB?_#V-htU_)7S7N75u4<;:F9PPcH{0mjn9n>' );
define( 'AUTH_SALT',        'h5#++^]{,g.c[?oS&2R-3IGyT-haGXi?%*Lf^!}%D_M9~]%1g||ErW@&VZ#Qz}r?' );
define( 'SECURE_AUTH_SALT', 'pPm:$)[!{]!DDOgdfk]?.B2^r3AP:roFXs#3RCgn,z[qOz+!DEf`]DfL#bS)HEMN' );
define( 'LOGGED_IN_SALT',   ')xKzes0eHX2,a!0w@S0@r$Nr[6(7a|Qhh,EH(?}L&`X6Df^tD9%|QNT^U0`&Vk&e' );
define( 'NONCE_SALT',       'GW|!b6>T_@E.O)B^]K6p2-7Yr:<2x?8pUHn?.C>;w2CHR?wSBB]0GneIV7Rdvpc^' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
