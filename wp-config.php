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
define( 'DB_NAME', 'makingart' );

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
define( 'AUTH_KEY',         'lMx lVPk,DD;AH}+Y{Y%d;?3.(sjX%3[oM.TO/EEARxlQmS?X@PB`NSfy9+KHm-s' );
define( 'SECURE_AUTH_KEY',  'T<6yn3UL>ckdD:?_(!>U1VKXX^H[K7vqjvP8+oI<HvutN|fgs#m.g#S2U:>UOTGT' );
define( 'LOGGED_IN_KEY',    ',p_N;:D+o4$:jQqXHw8>: &L.UrBm#tc&.Ee05VCTqo&D6<!@{x-sOYx+0XY_Dki' );
define( 'NONCE_KEY',        'GO)|.e1&8?xGdTl{x1(@v=`>1_Vb]9Z.*d:aB}lH0URepiFrn4mgAq54(%=*JB<x' );
define( 'AUTH_SALT',        '0NP4ECh`3(-zk0%3}F|x/x?L,JP[dF{Zf1O%KYzp){24rXyh^*!TFUz$:75{J#zg' );
define( 'SECURE_AUTH_SALT', 'KlbefU]LmRb/_Ln63fR~v93PU`>6<p0)!t^%7(:p65F%_?2Loc&oaomvc;!tk;[a' );
define( 'LOGGED_IN_SALT',   '=Zu*)ctYYyl<_L@qpu`oJ.Mbqv?C}Y%iY8.8vLp)~!}4=.wfN]GqnJ[6roPWvzQ2' );
define( 'NONCE_SALT',       '>B.q%+Ln1Z}9dumqF`]Ke#ivknl7Y$0Qc,59TtGlnw(d1]Z6@Rw}sE:oBq`~,GU2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ma_';

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
