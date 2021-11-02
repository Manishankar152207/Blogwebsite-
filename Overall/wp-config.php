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
define( 'DB_NAME', 'overall' );

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
define( 'AUTH_KEY',         'f2{OZKj%&`VOk)`fw.Ro^(3ex8Xv,0[6GMJ8au-F%L~0s+HMTl%kfjH>=VV1;`0L' );
define( 'SECURE_AUTH_KEY',  '*@&C(|b#a G}APuTb(,0NFAH3i,eP*O%_R$KDs<tLlzEyz2]/g3jB9nL?WvyDd]Z' );
define( 'LOGGED_IN_KEY',    'x7Q.`1oV^k.LeM fKG-`@Yx=-a#S0,JRGDc8#`N&Q|st?-)Th$X|p~KByVxSZ^N[' );
define( 'NONCE_KEY',        '_%0~+CbfBz5!:p#o@yZvR]<2~IqQ%4!YtY[|}d1CXQapvq?ZMA))E8He-t$42Z/l' );
define( 'AUTH_SALT',        'l_5}iiENRoK3sEK;8i-_l+4:F,{vv9UQH0N^rei%?c`y4!`}ito5&fPTk%]r2~~5' );
define( 'SECURE_AUTH_SALT', '@2]L:`1)(Bs2,,(~3l/W0 <&s-erolRDGw]Rz!j$J$(7/:5+}iehd+RAOPMW{i2 ' );
define( 'LOGGED_IN_SALT',   '#/YFA_k2l!t0P.[Gf~i=O8aM0cOA-/T,c=:g<ZQZzw;OtbR;~O?wGEf&)k$?LJl7' );
define( 'NONCE_SALT',       'it882it$,7|VF~IK!+wuwcWo!un:h9dgV=[4seb^ulXyRhzuV.Eun*qVh{WFU8A<' );

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

