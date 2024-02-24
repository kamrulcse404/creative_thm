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
define( 'DB_NAME', 'creative_d' );

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
define( 'AUTH_KEY',         'C@IB24ti6G,0@AI_ilE3P*m1]5$uil9=ocfdIEfSj]^#2<{iY^j[RW&;{VzH)IHz' );
define( 'SECURE_AUTH_KEY',  'nu7730F2x5PJT$I*yuk57CM)l iZV{$dbcY)fI8=PneM>NSQXaP:Ymz2`@@L6W@P' );
define( 'LOGGED_IN_KEY',    'bwnKJoLwaenwC,jcI 3?QZ;Qd72}1B1.$!2T|5U|n~>d)jC2dl@jjozE7s$%HK9R' );
define( 'NONCE_KEY',        'rOKFWxypWYwIGJulnII~hGU:K)81lBc:1zYTn8Qyei%I+0wjlW0cnaX@XxLhDHZA' );
define( 'AUTH_SALT',        '],MBkM)2x;=dR?m?a?LSW$Bo_oTVUib>1b7YiD@NQ#w7#?GNQur7or%_,9FB]qu}' );
define( 'SECURE_AUTH_SALT', '(7 {O!FX#MpaC=7[p9W_>:*`D%E8[NOj8})oXK;z8hxui4k8J?hm[.Wib1}eg;S7' );
define( 'LOGGED_IN_SALT',   'z5?gu=i8pg60&]r5!_prMM?/W]rGBQhJ<`[Kf-e~54$-*@#5a^$0t6Vi:+8pD$27' );
define( 'NONCE_SALT',       'yc5V|Pp`nt<2k/<G]3yubj0*j<eC*FB|o#QxRO4=OWU}whX>C/56BV19QeKajXUd' );

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
