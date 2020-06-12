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
define( 'DB_NAME', 'fernandafamiliar' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
define( 'DB_HOST', '192.168.10.10' );

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
define( 'AUTH_KEY',         'HeE_t=-RLtOBo9I@ml(We+^f{dObI?ztQ1u%8?&9QVf?PI8fc@da0n%Me16%&_$]' );
define( 'SECURE_AUTH_KEY',  '$VwFMT6g1aCA$.DU?Qb7(>GXk3^9l4Vxgh8-S6xv.[2pglf%HT.-9h%^R{dCoZyw' );
define( 'LOGGED_IN_KEY',    '8a!MI$$B2c:f[]u|1+#ET9q9M!RqsB0l_k[/|XerBg9sb++h*)&]}^:lU08#/gxX' );
define( 'NONCE_KEY',        'zE-CFiizu,ft]UhT3q`4De@E0xo/AqGl&2f^J41[=A9=*t0vR)9N]z~<-zTckU@L' );
define( 'AUTH_SALT',        'tsgQ<zhNibL]x5~Y%,RTzAV&aI9*y1W<}-@Hk1z^F*tZ,=[!77+I#`*)s-,+I7xk' );
define( 'SECURE_AUTH_SALT', '&nEngV%xg7jM;};Fq!F-pK,no7;3w.Q3Fp1Zgg0[T@qAcYIbDG+/~`>VbS>gK 0q' );
define( 'LOGGED_IN_SALT',   'C&$#7R%-a Id1kD@Z<Rvi7=vVejzYrI$6o>fV$yy9W{VePBn,Rd4_Ek0ZZU1.y`j' );
define( 'NONCE_SALT',       '$$Tr&A,+eU%3-7HSChzN>[^=/C+pxe*$)Gw>4/AWS;$nkQ|N{i%Bh<r8**|cYpc&' );

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
