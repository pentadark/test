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
define( 'DB_NAME', 'ghcmsx_bd' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Dt!Gd.`,zX.0i*[co-jwB!l*^yk1P=R)[VJ=?8CsOZY26KV}uy{Fl*4q(1(<drvw' );
define( 'SECURE_AUTH_KEY',  '5?4VV*KO~${Jo6M/h@$BjT0MAmAo{%pe@I{A-q03fY /t@akwq-kjNKkv<%]e Vc' );
define( 'LOGGED_IN_KEY',    'n2&wbt0_b,R^C7ZCBa| O,x}e/#]f,5%SreBq~[HBug1!,ak)@!5dYb2ZQOAczeI' );
define( 'NONCE_KEY',        'WX:7:#lG#/1rDndr/+6e^!01X-?<H3!gfO9f/a03INAV?2.+rPFK3(_Q3{;;.uMZ' );
define( 'AUTH_SALT',        '2(t#T^5EEAr4J`{Q14x{X!L&QE[=ptH.nPQBMe@BHyk3;]929tUPsMF;#NWKSL^/' );
define( 'SECURE_AUTH_SALT', '=gCSj^kc` bxj9lZf:d13=n[MQ7/G_RZRuBV-W4c5/?%8I}K6$q%L# !0uj0l7l}' );
define( 'LOGGED_IN_SALT',   'H)beIY,z^O&T_^Y|9j5/#Qg.~9h+F>SZho3{PLp8 kg]cwTUpwEfOTkr#QJR_VTS' );
define( 'NONCE_SALT',       'A?*~f)Yf,>BXq@5*a5v[[PGYXPd%ev({5a__^~f Pyz;,mx{`Wv>c_FI[|9V::0l' );

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
