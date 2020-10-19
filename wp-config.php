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
define( 'DB_NAME', 'githubwordpress' );

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
define( 'AUTH_KEY',         ']?@m}8#>q1iBVUw.JhHNwN*/K#w]_yr~0]JNY)FgN]:`j,up,hp8mR?&[gq%{]6%' );
define( 'SECURE_AUTH_KEY',  '(AdUS#U=:S&X[Re>2~iI<VD7?v)2P.8rr;`vi?}S]Z!D</UpNIsJ{epa xy|4*/-' );
define( 'LOGGED_IN_KEY',    'w$V$8Wg|ZX9<#GR48Bw){o#5/VVw;>!0jFd#+rU_g=D[-nmfvZ1RPhU$ue1WQrT(' );
define( 'NONCE_KEY',        '?eIR=$b)(xx;%l<$rSj5rU`fWNO*<(#X@<U_bN//cF>q^@+[A<sN]@>5tK0+:&0#' );
define( 'AUTH_SALT',        'r*e.o5+2.e9,~K!Cf xT%^vi]./ts((,CiM@{IbThiWFs9Z8<=$X?ewXflRO64NF' );
define( 'SECURE_AUTH_SALT', '^dnQ*r:T%/iVz/d&L<$gjgF9sT6eEVr8;o<^}c~<[Lp xe`Kk5M@_#]G@g0b}dp*' );
define( 'LOGGED_IN_SALT',   'p47^n8ofh:7U;Q.;QBVpp8UwNy+QcNQV9jQBQY2I&%7?Ts,Dp%@Fk@s~|#4W~/y0' );
define( 'NONCE_SALT',       'GJie}lS0NHnGMGi9KyO_>&:DHU.]HU@~,N3T/,4)__Kf;a/JzChyYx@%@tX2U%zG' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gittest_';

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
