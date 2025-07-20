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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'D;1}MuSMc7f(dS6Ylsuq5Qv^NbT*oP{^_GTlB}g+ oF+N-~U@SjY)p^l?>LLN8g>' );
define( 'SECURE_AUTH_KEY',  '/2oAj%+hO#Pf}peHK9k/Rc3O(DC/3;Ej~,qZl{X=EB5WLuG :cQ!k;%A8N3&H$Lt' );
define( 'LOGGED_IN_KEY',    '}A1=wCKBR#Ih3D` u(DN?[2?;BZ&<:g,CD*W?}pSRDPco~>E%B]<,TYRWL)sk>fV' );
define( 'NONCE_KEY',        '0JG:xWF4YMj(ty)=fudn.7/f9N#ysB]cc S/8iB(9iYc.HrASA2475<>qdrwdi]]' );
define( 'AUTH_SALT',        'Va@cZZmp_. &+ZR$6iQ5hG]SfD;!L@Xan6b7@e#n}W-Zm!|uKe5:VrP4<Yy;Hz%X' );
define( 'SECURE_AUTH_SALT', 'wf0*P)_@qihT1wfm2_K@1){qJej2]pR{nqoO12M$ZP)}2wu?j,/8)_^{T@]/,7n^' );
define( 'LOGGED_IN_SALT',   'q>Uru>tOq=MV9t18hM1Fp )LI@:t_:${xL2te&`}d#Z0J#3CNkX6C!VIM7T1Ve=}' );
define( 'NONCE_SALT',       'ESz.7-d2(h!mn5[bDl5n:f`<UEu@#mTQzX*8iG?:,/[K`((08(=L<P-5DdmxGR_ ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'eaby1995_';

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
