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
define( 'DB_NAME', 'ventomgvento' );

/** MySQL database username */
define( 'DB_USER', 'ventomgvento' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Ventomich7599' );

/** MySQL hostname */
define( 'DB_HOST', 'ventomgvento.mysql.db' );

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
define( 'AUTH_KEY',         'ldoyKg`,Jkg_Hg:d:*Tdu-04h*tteU4/$nEs&jS{/B?OGQ|A2n 9|_1asXG3$D>+' );
define( 'SECURE_AUTH_KEY',  '4E<?xn3U3:`6*g%qiL9_w9E^t| l ~SY>fg_N*sBU/3n1.<u#q8z~H[hXE7 BA,=' );
define( 'LOGGED_IN_KEY',    ']0[-,<Ey#U-`zt) 2P**ON/;[2R:F!BmtDF|grAUrE:NSKC+tD~JJKE!oe:xNn@,' );
define( 'NONCE_KEY',        '9 <r}wb+-^R3qzhd3ot[#i3H|I4f`jfldVE:Z2o-lL.FxjU}N#[&&O.gE=hw>wd<' );
define( 'AUTH_SALT',        '6eTz3e%Q0J0asoH8uN6wBpsC^]xz(Zw7O=qGT8zVg(4ph+3;+BOtm,Zm)UQ4Escn' );
define( 'SECURE_AUTH_SALT', '-)GU#EU.mG*IW1^1.K(7.];Y,j<q8Sm-)^=r[4<hr:eYecT}lM/MG/Iq#BF4A`{2' );
define( 'LOGGED_IN_SALT',   '<DQ.!E I+brfXi`JXH3~AUC-S@&#YB|EWY@8#hWu:PZ3[:E]+k~cE3ELCXJ.VlGk' );
define( 'NONCE_SALT',       'rQ.XqxPwiqbGA2HSl,*5#58D`7;zq&x_7?D#EEN|}>N[oC>j6H=xblLRNh9+M=;S' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mv_';

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