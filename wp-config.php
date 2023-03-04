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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mksteurk_eyeland' );

/** Database username */
define( 'DB_USER', 'mksteurk_eyeland' );

/** Database password */
define( 'DB_PASSWORD', 'hq)@ijsdFobP' );

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
define( 'AUTH_KEY',         '5H];s;0(JFiH1t|RDXXvJ%pun41.W_?HO8h$kS%{&adq/H-*jE}>@]sgOYt(+1$,' );
define( 'SECURE_AUTH_KEY',  ',y,5` A%75HFt90C#bc7 13U6+X`G0%%-*(|O3c_)8HPg9 tIThy3T?s$eJ}!]2^' );
define( 'LOGGED_IN_KEY',    'f%2+9kvC;^:R4BK_Q7sos={wT?@S8R{b79CG;iG]p$/$,Ac5I[iw-Oq!yA=:E8S!' );
define( 'NONCE_KEY',        'I/{v?Z6>A}radZ8sb!)==v;W%1brs]7ZVj:D`V6|_q_/F]vt~,Dwal_U>I1m_@Y>' );
define( 'AUTH_SALT',        'Mlyt_yEKE7i}STB/-eUM-:>k9`:N5w ;_wb[c0ie`:?Isb*pC)QQvw7[bS Z>+;m' );
define( 'SECURE_AUTH_SALT', 'K+EK*P71!?PWYe5wGj{qGtgfH>iMUl31eJuYeAwFRf2pHp%NA=A@:VRQU5}`ZiT{' );
define( 'LOGGED_IN_SALT',   '}^/#d)%z$V%%c,e:#/5DNxFoYz~%Vv^T,SIT+{nY|ftjg1C|%?:PyG<=}2w}RTuO' );
define( 'NONCE_SALT',       'ze{X2TPTi2?ys%gvs37Rg{PeBq?2/qc)Nz%UNic~622.!zwb,UU,#l64|_ Bi#M@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'eye_';

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
