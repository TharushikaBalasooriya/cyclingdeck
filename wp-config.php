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
define( 'DB_NAME', 'cyclingdeck' );

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
define( 'AUTH_KEY',         'x^FR6@!/(%}ZU/PzibQaQ1tewg~2}1]<;XFCH#cxJpc#8w;66:^zxVXSx9 |(Fm^' );
define( 'SECURE_AUTH_KEY',  'u3+OhSh 1=T]w8!#m%Xe<=rO?+^<Mi,eop+8R0pe)6Fb(x{PjI-]uXTguZgN}PE8' );
define( 'LOGGED_IN_KEY',    'u(o/a|wp6{{lq!,7q0,Q%*G)Px;^z7#eqD-v.4dmV<drHl-A<}7[TT0DKutZACB/' );
define( 'NONCE_KEY',        'RA/,^+uwLLdRnw%vPpXn090m[>{z@66nG9 (j3h9#Q(0^.b>oy)]#mb (=gd:1#D' );
define( 'AUTH_SALT',        '},8joz5%]*USfe8~a3!~w/{gM]SRJ+ond4mBv,/$|Y5kXQz[!D+~C1%XeU.^v/zL' );
define( 'SECURE_AUTH_SALT', '|*dBwGQOd=4j(;aYf_jyJPY9)`fAy|c_phWC42nC;:h-m{cE|n(Hnu!q?|_wb|t[' );
define( 'LOGGED_IN_SALT',   'H@wif$BP1@t-eQ=4Ru-GSaZn`N(6[Orj_YB<_k[D#4oL-2iA~!%aHG4OV=/~*zKx' );
define( 'NONCE_SALT',       '{3+Njo2C/r}j&jq`e-BjPy6&Y>M$3F<p)pAqbp2BDk+Oi>IOJ`Si6N9yA ZZ4> h' );

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
