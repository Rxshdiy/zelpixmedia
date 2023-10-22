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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zelpixmedia_db' );

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
define( 'AUTH_KEY',         '!,;-POcx_1-eTb/?m8]!D$z}JtX)P/LeA*N]:_1?O^LT{ZE@hNN|c=7Xv!)rs1AA' );
define( 'SECURE_AUTH_KEY',  '>ReZ#r+U/cR|a Dg^7X(kCI%o0^~pYd^OAf#83)TfcW_!d1Tb[.Y^$ktf.? F-:4' );
define( 'LOGGED_IN_KEY',    'Y}SpCtlm7Dr^!TR&S!?NM>K0|SEDppeV<r}4_/pdlbaQgi%jT>p.G;Z`Z4fYr!N:' );
define( 'NONCE_KEY',        'w6jJBM[c?FE-Zk*1&aZnRHL;Bss7AO$l]4l;1U*/W)eT_y6FEP^@dS[gg(g9=5 B' );
define( 'AUTH_SALT',        '!$duJR<Zl]z(l Cjvn:y~]-&24k pU501.= AM-GQF(J<ZY/KKBLoHX+w6$R;z%3' );
define( 'SECURE_AUTH_SALT', 'Y9YleZBdsNC4uK{dV{ SY,tRCI5AQRE?6s5d8k-CKu]~902+DH~Q=88JwSESiD+6' );
define( 'LOGGED_IN_SALT',   'G]mHL-FbVhwD mZfMGn` >P$k=HJsbUk)VlO*e5x~mtba0b!$hU<E&!I9L:z)C7F' );
define( 'NONCE_SALT',       'DOxu#}&]+F>ekS?2qkP=WsYV^9P{4HqxGst#PHcA~=F1<oI(j79|[=l&A!K];t):' );

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
