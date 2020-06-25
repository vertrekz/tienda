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
define( 'DB_NAME', 'tienda_db' );

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
define( 'AUTH_KEY',         'KGT;H(6Fnet%SW*Op2-70ar$DbaF@PBQmj<]GN]{LWu.u&x.@!5ZZL4j_1Y|tKGh' );
define( 'SECURE_AUTH_KEY',  'v&|FPXz&LC]OJ*`dLXo&@/b$Q,;Ld$ijE7)LEMpZmm61/Q= 3xDalb*y/a6[_(39' );
define( 'LOGGED_IN_KEY',    'M=&}tFwVe<TgZ;MQx4QrY$0BP-*=>gC>A+Q{uo|suFL=UW^@8/SMl0Q.b*J{S=KF' );
define( 'NONCE_KEY',        'd%?!K0/:$]/U#0j1xN4&&QJtXt1)&d(.N^9V @kS4bc26f?7q&cD4v.tL*`]y(4o' );
define( 'AUTH_SALT',        'VP3@^J(TJWK<^h#FGW(O9Q(4v_RR8=A*,J2T: {mc,yQzjtM)BpJ~>tq`-%JG)nD' );
define( 'SECURE_AUTH_SALT', 'A%QLNARDw</s9I6-0Os?rx6orUq fc/#kqx#0a2M@o1,pT,@S}:zb)iE(C-]H2w-' );
define( 'LOGGED_IN_SALT',   'G}mo>jXW#SjQH|7bfx#RP/uNlCjE>~tX<{Ze,i8m_|Ml^gUYp4hko%{Xz~,:&Q0G' );
define( 'NONCE_SALT',       'u9}BvJ[.vZ10z9Y/+:Grtg 0jk3^z5FpUkcT-(yLy,kFk8/nisN{%e(pi{,/Y}z7' );

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
