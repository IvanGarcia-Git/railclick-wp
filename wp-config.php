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
define( 'DB_NAME', 'railclick' );

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
define( 'AUTH_KEY',         '/:WqQiIgC9q2e!^Cs?F!R*vj/WmF>GF;PT1M_[;y.74{(A[f4psLS%Gq,|;.^9wY' );
define( 'SECURE_AUTH_KEY',  'Vg;S&o<#[$Ji7#:@VrXR/<Q1Xg9ns7FOzXopoov*(_%DZrUm7]rc)iNGrG(2x xM' );
define( 'LOGGED_IN_KEY',    'U!6kqV;/4*V!(;$ OJsm;^,,>Y]#>0]bGrjxu@aMl5Tr[E+UmD{&5T6bA)1b_FM$' );
define( 'NONCE_KEY',        '1wH|E1e&ESs4qCTscKzE6=?Z=)uP?dcbk8r*P#72zH7|EW5@}uO?va}xuk@=QZii' );
define( 'AUTH_SALT',        '~0HJ;_rQBe3$6QxTU(EcJ){<&fCDX&v{i3{6q!!ip]bUqfm~,nB5R{ORqFTcRsW5' );
define( 'SECURE_AUTH_SALT', 'zB,IIh@[L`xV*D@JZA-~LGf3^x/+zd!;sClcaf;%ehum.Mz:$!Yzeg7aD?= ;?lu' );
define( 'LOGGED_IN_SALT',   'i*9z8gVByV,JyQk#=xU,6Xa&P/xo$O|e)5:4R64R_l^)C+Dc#<~c2W_RGfUyHtA0' );
define( 'NONCE_SALT',       'ED 4|&A8Wsq~__B5maS[U6qPB:Z&JYOl)laoxhLKTMx]TV&+>[<GFEOM)D`0}+g;' );

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

define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
