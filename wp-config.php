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
define( 'DB_NAME', 'wordpress_local' );

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
define( 'AUTH_KEY',         '}@WS_C*8AFiOU 5/?0`HIN}M>.C.%bFsJTBPCdO 6J~|j;oQIaHb@tE{SuFaK:9(' );
define( 'SECURE_AUTH_KEY',  'sDV@4-[4VLp(0a7>|eu)y9wSHGx#V,5(B]ON*{*#jp@-i]sd+-`pC{o-PnJLpb8f' );
define( 'LOGGED_IN_KEY',    'rzmAm&=JCJ-^WgA)K6dwXe3gV;=l,XXUYv)&%LgH!7O*;!E^,4@`[[hF;5N(yEEg' );
define( 'NONCE_KEY',        'g26B4031#_qeF5.6+?]Q^^aL>QK]LYI}TkYGF/IFCvK8AJBq]>)4}E56ldnC,;7Y' );
define( 'AUTH_SALT',        '{S]kSb}i]=oBn.3i,^oj(sS#n&FVJK,e]><b;Bi*N9nb595K-mz)<F1z_s0~#]/a' );
define( 'SECURE_AUTH_SALT', '?Hr;H=lMtD(Z7H~Q!**d$c8.~&IU TFPw@mKq{h@Doq*!._]IF@AcX7 <7`?C#9r' );
define( 'LOGGED_IN_SALT',   'gr^E_:ZEm?;]-;d,^2320l~{|Sr.tWjGRQ1C)(u#T|O:RvhV%?QjAu7*h3/18-G)' );
define( 'NONCE_SALT',       '3zdjT0J6u9.K$K|WK5h|!m_>(PyW+02?dXYA+BgYh,})BeAl;gFL%xUbI;/Z9AP`' );

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
