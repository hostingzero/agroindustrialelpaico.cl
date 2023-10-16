<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'champion_wp59592' );

/** Database username */
define( 'DB_USER', 'champion_wp59592' );

/** Database password */
define( 'DB_PASSWORD', '@5S0Pm)Pp6' );

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
define( 'AUTH_KEY',         'pybu08p4gnamm10cgpoqoioopcjx4xhquyx7rzgha2mzsgykq9wckkbiwehz8ipx' );
define( 'SECURE_AUTH_KEY',  'o6cs7up93j9dth768nxucaksjgypfpe5drlmqrlcvkesh3m0t35vgitsuo6d34vu' );
define( 'LOGGED_IN_KEY',    'py7wwhyhbblc7lvbgdkmu4ndiy6wgvo9lnzbrtfrgdfcotsqj8a4kblwygkyqj1g' );
define( 'NONCE_KEY',        'ffa1l5mjcp82ilnmqhrqss61g9luvmrjm1p6uqjzj1mx9fz4l31xwwi6hdigs18m' );
define( 'AUTH_SALT',        'i9mxmkijusgcsttye1qvrtbxto4zmnhqcytnoibzmfirraplotbuq5dp4wumcgmh' );
define( 'SECURE_AUTH_SALT', 'z6sfkmhsvoqgosuykmcg390ab1afihsoo4yu9nlnemkq0ivujr7syt8edhqmmmr3' );
define( 'LOGGED_IN_SALT',   'hps4q1tuz4lfjh6jwrnkjmmswhuqw0vtyisqqtyhzvgnptqoy41uveia2q36mz2y' );
define( 'NONCE_SALT',       'qjctqyjx2hkyxuhpyzungr7dlznath4w1gnybof7iwagiyuomvhqs4fgyulizbmf' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1p_';

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

define( 'WP_AUTO_UPDATE_CORE', 'minor' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
