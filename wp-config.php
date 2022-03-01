<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'unaux_28318713_472' );

/** MySQL database username */
define( 'DB_USER', '28318713_2' );

/** MySQL database password */
define( 'DB_PASSWORD', '0hp1(s5SA.' );

/** MySQL hostname */
define( 'DB_HOST', 'sql311.byetcluster.com' );

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
define( 'AUTH_KEY',         'uqfafdojdlew9gfz5jhl6r8upincuw0jvazhrxgsownr8axoadccpe4bklzqoi7s' );
define( 'SECURE_AUTH_KEY',  'srw9zytbvqigufl7wdrr6157b5mt0xvkarn0uclyknj9faczt2oxopre6ydhhtpp' );
define( 'LOGGED_IN_KEY',    'ezhwxsfneax8brbdodvvwdf57aah0pbzfj5dpdfvuprixwjgqzbkid4pw7xndfu5' );
define( 'NONCE_KEY',        'lw6ttofhvg1k5ueebde5piwdqqci14leemf4xadmpkmjmxkese5gwchnxkrd76nt' );
define( 'AUTH_SALT',        'wn4tlxrehifwlb0nonpxb3mfib79e4pqwrfhncsphw8lctetujw0hbbrybxxcotu' );
define( 'SECURE_AUTH_SALT', 'syq8mrqxttwxcj06rjaacyc5vnpdn6oguppgx3luhpocbxbxftyewqi6hkfrgrlv' );
define( 'LOGGED_IN_SALT',   'fsv6bialqpelxiu4ogtugaiwmfhccuplckbdfz7sfjusrbtx8qxgs8mulfnviysx' );
define( 'NONCE_SALT',       'ba4myuolj3hgb6cnqhts584fzharchrj5h7umcscp4ego5y6sma5x0xlwowodlmy' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpyk_';

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
