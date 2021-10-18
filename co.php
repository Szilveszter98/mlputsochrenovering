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
define( 'DB_NAME', 'mlputsochrenovering_semlputsochrenovering' );

/** MySQL database username */
define( 'DB_USER', 'mlputsochrenovering_semlputsochrenovering' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Boglarka1998' );

/** MySQL hostname */
define( 'DB_HOST', 'mlputsochrenovering.se.mysql' );

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
define( 'AUTH_KEY',         '9phYtR=>utJz&;NhD!cWI~/`vkaVcF]VyOF!oMb!BPNZGRF1P/hMTO+Eav6dU[wC' );
define( 'SECURE_AUTH_KEY',  'O3W-y[/xFgu(&)W *3>yh|!/Ck2NFvl/gl)MxJK<0*W;jtj~(zWL=`5b/GC2AkfV' );
define( 'LOGGED_IN_KEY',    'CSi9/_g/6!$fN+0AB]}4LTg0n&57[zjA,kBOV@;{s!_aWJ/QP0n(RQ+@fpUO|EPQ' );
define( 'NONCE_KEY',        'dokfg}`H|lB9=xeWd?zax2.V%JnXn29BB+Ivfn6^L^XjJyPE.^b3x7meE0{kUB}S' );
define( 'AUTH_SALT',        'F^ [$gMNu|x+-=kY$18xqbMFy4Iku|Z;k$7+qRt 4=&Epn(|>tdTz-?#tUVCw-#3' );
define( 'SECURE_AUTH_SALT', 'UW8hDQ0G_QDNQJ!-Z~vIT5p=Ht,~5{tSh-kJCtx6M.R?O]~bTXUGv*1I_BY<fS[+' );
define( 'LOGGED_IN_SALT',   'U.0-;MZFn&c)?SxDhCWwJ.j_I!cmToP7kev4EFu#HM.N.-jK@|b!zZf2VW+~,%4+' );
define( 'NONCE_SALT',       'g_&}@#+$jeK@Bv5E0]W+dAH:9^FOS={H`/w&iW7eketT8uA#}tvAr4hkC9w$sfm)' );

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
