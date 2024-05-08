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
define( 'DB_NAME', 'aizero2hero_website' );

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
define( 'AUTH_KEY',         '<t{2}$-#ua*f[n)q%U3 K{k}SZpQq%>S*$(xH,cc*J4v adCmreUsB ~#.<Y~[la' );
define( 'SECURE_AUTH_KEY',  '!H$:afdn;Ks1!y#^xojPdS}~ E#.^5FgA*~M{yR,_cOwRu>[u@Q[VY[oC6L&iBY^' );
define( 'LOGGED_IN_KEY',    'C[%g$|5rpF%SKEcqQJ7PeUirY*ii@l5:}rC%xbJY4ti .Fe |=#FFSi*<X[47FJ6' );
define( 'NONCE_KEY',        ':p` @5Sk832z5wdgJT*yQNu[~HKi,$XY9LH]~Z/}Xu/n/3Xw>woFeK1DCcdnk5b+' );
define( 'AUTH_SALT',        'j$t^vlNqN^^m2DYxyCz:Mm/GNV>ebU]OdwXB0IEVxdwQz9!DI&h91!^qa5!e{L6u' );
define( 'SECURE_AUTH_SALT', '_>Gy];FmMHCFc_k@81}!rJ[#(?x$j(bcg@[(gCRHm0XO2%4]lx<&5C|sTBS+:rs,' );
define( 'LOGGED_IN_SALT',   '!&ZfDrZ?SS9-&-w!-Sgd%y=8|nPd@o~[MGxseL[#Zw?)=b.%G1,8s%hjG#nrP<t*' );
define( 'NONCE_SALT',       'E3p*3.>nq:R9|%`G}[]7+Q@f,*%J4:g.uQSfuJiQ?32m5q}_JP0!s:KXIJ|VlM:^' );

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
