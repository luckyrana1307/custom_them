<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testing_wordpress' );

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
define( 'AUTH_KEY',         'j>#A>~U`M?SYG1/ae*H3%G=Ice}!1Ryldo^).#Oq*5Fnf|F*|G)Z>[)q?T/0V_+>' );
define( 'SECURE_AUTH_KEY',  '5jB&N`wZWSAPo$Ti8O7{+&NVV2F@DNQk=~v`27ow4n3D)lN]net<{I]%rz|@,[}R' );
define( 'LOGGED_IN_KEY',    '^.zVv4o5WJwf:&?O`Itm:L 91_nC:}^.ue*M8Erf=(-GC1l+79+zrrx)Bx9ujAr]' );
define( 'NONCE_KEY',        '!_ltv#|Y1f2[Yj=d&.1$pL*d`<Y<l|`;Wjz&35tXJ[~jM5wS!F#.}o(BcQf/<H%G' );
define( 'AUTH_SALT',        '4UB+SFxJK<5Y.Az%RossB:xZPub|O%vAF>+g>S}$EPLOq{#SR_j67vll<GjD;(9r' );
define( 'SECURE_AUTH_SALT', ';RN ~z!/ nX6<v-vCq]J89^2Wc;h8R1#9Q8^pjFuO$~@6UZ+2:/q#k++g4kjL[lU' );
define( 'LOGGED_IN_SALT',   '4ks`mrj|hALxeXIO{q$mc6~mtFJ!-]|$%t4Smjrxi0qT)El$UlVLjSmS*^cJ_B(!' );
define( 'NONCE_SALT',       'Wp/<tIX#Tg#T]p_(;o&9M{PSBx)j OtOVlt&B[1-H9(geQeBR7(4.g{3_~64__f:' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
