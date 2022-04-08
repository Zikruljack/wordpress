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
// mysql://b11bfd503878c7:61f6b1d9@us-cdbr-east-05.cleardb.net/heroku_c7774b2486be1c5?reconnect=true
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'heroku_c7774b2486be1c5' );

/** Database username */
define( 'DB_USER', 'b11bfd503878c7' );


/** Database password */
define( 'DB_PASSWORD', '61f6b1d9' );

/** Database hostname */
define( 'DB_HOST', 'us-cdbr-east-05.cleardb.net' );

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
define( 'AUTH_KEY',         '@vupb)e]HzuDI_c_msOFz1h|K|SeYW?<AhS*#GA&)I[FfNBH,eibb74tAFvY,$ F' );
define( 'SECURE_AUTH_KEY',  'x&~!Wf43)Vpq/lty]5:Eo3F:H){+GvYte7/U#s_Aw KQ=j@]bI#6GQ<e4V}i|+F>' );
define( 'LOGGED_IN_KEY',    '0u%f3&V@(gDe9TmC~3fXp8R4S0JH~gi{4w}PkAKy^p|$bX!8;nqA8O5Z}f%7wryM' );
define( 'NONCE_KEY',        '?]rz:v&o`.VlYCxbux0=obxD)& ix7|eR|ZpEXn20-zx(^$c0;wV2DF7xBcTH(ba' );
define( 'AUTH_SALT',        '`/K(zAm4b}:c?&!FKW<|fq9q&=RN+g9dFa,f^s%X{wf]bjF]9 uaWu*5n)Os-K$5' );
define( 'SECURE_AUTH_SALT', '-vF0GZ3a+mKI$JM0sVApBnEACU+INs`i7tJ,hP7aj[|_k.+Wo]QQ}NJ]>&^0Lq1T' );
define( 'LOGGED_IN_SALT',   'Hp+vby_`iyFU=u95C,Kmi5q[..ANh(_?vG0Fi9G3Xf]W|A.SNG+*0KGkqI}MWX8u' );
define( 'NONCE_SALT',       'r>a|&FuI4h6uX3>x~r+g%MK[DkzurhGfE!51 6b1k8%<?,PdUhV?tbQdQFthC?,o' );

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
