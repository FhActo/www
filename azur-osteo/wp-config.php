<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'vfyttubg_vx4eaCDYm' );

/** MySQL database username */
define( 'DB_USER', 'vfyttubg_25nv7FuI8' );

/** MySQL database password */
define( 'DB_PASSWORD', 'flzmwUzhfd1hXIkGFcktQ8bkWua0PdAg' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '1pW~*;UlJ%9%.rY!K-&)E{t^d?*dnt>3#kCD%U40Kqeu~)b;z_U$Ax>1i#fTW9yI' );
define( 'SECURE_AUTH_KEY',   'nqlFpW< H`<L=uMjxR$<Hs!*<$1x{;`Fn(doqOA|bTmvJGg`wzfuD:S>^FR?1?,/' );
define( 'LOGGED_IN_KEY',     ' LtZk9s[of%-t`%ed-I~}KLQOQ;X&W(0M X?[P@Z%(=*L$V{TVQ/*)[%3C`GTemI' );
define( 'NONCE_KEY',         ']+rp4jU PlIi&A~auVZ0z]kHzaJ`8iFlq18H.%%>QDnf_Ru?,>qzT5Y_$8!oQ)`n' );
define( 'AUTH_SALT',         '4]v=5{z]q %Q.`#~uI?o[-25a5]d>fUPV8mg^gYVR:p&7|tg0i2dP>v1<$K=[rR>' );
define( 'SECURE_AUTH_SALT',  'f`@wD7bbvr5=d$sBzd2.#gtC<],+w?f_kk!*WdbW4.1<2//$)^}_9uv[7BD}GOg~' );
define( 'LOGGED_IN_SALT',    'i2qG34D}a2QmLqxl$ttd*-]A6-6WeaiuOq1DCP1zbcVKEK6YfU4U4R/fC %9tq;6' );
define( 'NONCE_SALT',        'UL0JQ<Aaq9H(AG|@DuU,nK@3!4n84w*@cM(29X$wC(X~?lslVT y5?]:,pX&umWE' );
define( 'WP_CACHE_KEY_SALT', 'nzgahUPob=V/AS?P?h $rg27^[p{PBH3SUdAXDa8D]+UUnah;G#;95#=ebKgQGuS' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
