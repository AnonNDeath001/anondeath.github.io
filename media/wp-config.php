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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'Qv_PsBm;h4ZLtNlbS^~p1,KkSs o%0&i#k_qb9!D:6jGRbuR7Q/]NvyFwEDxx7m3' );
define( 'SECURE_AUTH_KEY',  '6FIkQ)8<8SBI7@&yl1}:f:=W3eArLpv-%b|:P>p|-AE[GnpDQhoC|MJ[ 4L.5$iT' );
define( 'LOGGED_IN_KEY',    '5:e]|vWt14(t-lx2)5hob,Lk%ORS> XyjU3bX!I$8gg(q1<CB,VhA:V5Jl`yRVY)' );
define( 'NONCE_KEY',        '`k#HV,7#s`N%zmPN)NFZ,)A$ou$b~kx+YNPz:B<A3Y5 xgIx/S{d~DX81R,-oT${' );
define( 'AUTH_SALT',        '/__5.VFp>m_/0peT yT=<#WN]2{Hhd5u+-AfRc|,:JOIFr-q]P,v/gt)Y7UwZ B ' );
define( 'SECURE_AUTH_SALT', '>pNQ= TR6-my@Qb&h%)eiH)[.?YZ5xb#i?ey4+:{B%_xH-so,OulJ08x.Dk3;,b@' );
define( 'LOGGED_IN_SALT',   'lQ*i?t:UdK xWa^@&YERlZPiZy*HQ?TQ?fFN;/_Z^HM6PK}L6,MrLZ.i<AVtjRTx' );
define( 'NONCE_SALT',       'X=bBXC0d>d1@a(`F8O+Xn=/,~hR1|*%3oU^Dbt-6#.QI7_;jf}^t@dXwNO/tGZ=Z' );

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
