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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'guiniestd' );

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
define( 'AUTH_KEY',         'ydlE?oS;5?gAI.qxC>w3>5i:L:)Zu#_#`._=y{4a>JKj749A z7j-7)a9w;,,#WO' );
define( 'SECURE_AUTH_KEY',  '$]B/>na5=[+zVbvu4|ptoXcv_|gQ*YmKhGAw2:*hweATn6h*{8C?3_nDo-gDGo8S' );
define( 'LOGGED_IN_KEY',    '_kT#c@{f_1j;|>E(!4DWAs8lpaKNq[.SaRI*_WTht?SisuqK3USfqfwY}|e`7}d0' );
define( 'NONCE_KEY',        ' ]m:3I?qg5R{ZpL!`A]dTL4>4{W_5bRY8:]=l3u$8H9t25SO1p0dOX||]>8Mfnl%' );
define( 'AUTH_SALT',        'm_B|fFM#CEK>).O,*ds8;C@%]xM[?h@G0ADq|:Er4ZWV@-/cZXIttC<ilPJb*F*7' );
define( 'SECURE_AUTH_SALT', 'Hwm{@y`i/?C/..4J%A9MMx@Ot[o0As]r99X1pt`H]q3SxBP8r{7pZ-d+OWJ=a&f^' );
define( 'LOGGED_IN_SALT',   '<gue@fDI1bW|5yHy}{o=p_m9{XH3u_d:m_<}`aZhb|c1;l8vq->YJThb;FdX;Vo~' );
define( 'NONCE_SALT',       'r#*VMmThs9A{~iM5bg9hyT1L*ZB8%v~rA$#t }E?7gXJz.@Jb`Lyc1cMrM*;dC&6' );

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
