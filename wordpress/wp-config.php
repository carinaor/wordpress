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
define( 'DB_NAME', 'wordpressdb' );

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
define( 'AUTH_KEY',         'kN6Cl{FycXD3Yo7Ae8Lsv0RUzQ^`)s~R !Wt5iF|W)t5kQ%_6vi~L8UTkKPlG:?<' );
define( 'SECURE_AUTH_KEY',  'se}_MI,-Qi3fS}oiT ZNL&8f(w|#hL<S`gAI4&#!S;EWUi>YSf&KIk-f9aipOG,c' );
define( 'LOGGED_IN_KEY',    'HN^v(goJfs*0m0&^{xAj#ZK^bTHWa;aj0Dh=B_~VpmmgBv#FTrx-B H8TAY}O4VP' );
define( 'NONCE_KEY',        'd)7c#pG3,dch Dd!2~1H@q(^_V/?;kF,~eElbZcp1>qi=]e^Gaf4rxg4R(~n%2k>' );
define( 'AUTH_SALT',        'a>wTiJqp<V}GdkpvW(#I:@Uc[@k5`P:Y:5e6qw6Beil<Gx; Z*W_w-Hev/0_trf_' );
define( 'SECURE_AUTH_SALT', 'wq$UsC@N/bKC|1sxP(j)]^8s|xPjX<!Z-nR}  M7rurwsy<NoS4<HV37pJkVT$Gd' );
define( 'LOGGED_IN_SALT',   'TCxUNV9MQ<9x$2Cd>4nJx||S^nQT:rd}OEReMJLzV#U8^]C&},![<pPCKAx[Z}%x' );
define( 'NONCE_SALT',       '/g,1vvy+EqIR1O?x6&!~fj,dPg/yuuHP>tB|$Cw*x)=[p8q=X{<2c?PqMj<8c=o#' );

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
