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
define( 'DB_NAME', 'jals' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234upt' );

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
define( 'AUTH_KEY',         'f4|[JkCg=+NJZ+*#}O04Vggrv,SJw7v|c]isK5mcs[3H,V$~Q07B-VXE?^VP=)S_' );
define( 'SECURE_AUTH_KEY',  '=0RC IV.<ax|jPALRXIDsn~&|&69y?DW(??-Y5Zrlnh,]YTN}zMv?li3#x@iWLGm' );
define( 'LOGGED_IN_KEY',    '-4oIIBrQ]u:Se}A@Iopc8zMc$!R0md-P_#E?1w=bOddF{Z<@..iaLQ$poo{~to_B' );
define( 'NONCE_KEY',        'FZ4m-TU:R)%f#lZq6Yg{{}E.#=k2L_tuM@JR[D+*fJ7g-&&jm,Q(4.Mf#^jv6h_8' );
define( 'AUTH_SALT',        'c~dP2T3ySZtAO1VPEVaOeE!_m4Na]&;`dhrN,].;90NJ@JT>smKY rFH}=f]cw]V' );
define( 'SECURE_AUTH_SALT', 'sjK!]%^V:V3F736a[j9U9{BAdX&<u{,ie$`k/+l+*NTxCJMdPljw>|X;R[ZR2CGL' );
define( 'LOGGED_IN_SALT',   'D2E::,2j9KfnuR44:*Y|x.]@E,2_%:m1o`w<mx3@e+kh*{fYT+30wo)yZJza1_|Z' );
define( 'NONCE_SALT',       'cwscME-0s^1~Yb#1*B]^c!Bh=Rd(Snk5N>q8>/tz,sS_>|]l1;K<wU:lN&._<Xn!' );

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
