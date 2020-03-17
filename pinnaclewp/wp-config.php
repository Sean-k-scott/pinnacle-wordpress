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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pinnaclecoaching' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '9#hTg;:St$oA55BDMLR81G@!{RCAxw>K2m<3T2w5wxXc1+`@,acmBH2|Xu0)E<Gn' );
define( 'SECURE_AUTH_KEY',  '32u=/sVW98J;e1pK?x5lb >lsMY)QPSgrQ<6|9M2g@x42OY633nPMx;G5*3|,:jb' );
define( 'LOGGED_IN_KEY',    'YOil>E%CHoS0SK%ZO*<i)6g%d];+/=49X5CRy+{>(vKXI. nu`QEkxaEb|?(Z&I5' );
define( 'NONCE_KEY',        'PoWyw=,6HQzt4q?mIEKCH~`n:C!Rks#*6RaTI+8R2)4Z!,(d~OUnC5WjJ64];Ei}' );
define( 'AUTH_SALT',        'SUu4C< M:;Ps!Ct 3Lf+6BkpzNaIr%4:0[?SzqOsyT<Wr$nD5As.nb-HX?j,rR1>' );
define( 'SECURE_AUTH_SALT', 'TsjJN%9H)L8m$Xz:u#Hb# Rp|UB@[hN*#Aw[hptl_tlxgHP54|U)UK6jap}wAGsV' );
define( 'LOGGED_IN_SALT',   'Ru3V(HO~-R*2~!XT]yKI$W-mVwavxkFkTmCmByfr~NQ9m]mn3.|lkD2k#Mx&5Mcw' );
define( 'NONCE_SALT',       '/qLQnu?5BTk}#8Wtx~!G%~$c_~$&c/u>U9U18Q#{FHlYcnr_Bv-93ntdh]*=(:PH' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'p1nn4_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
