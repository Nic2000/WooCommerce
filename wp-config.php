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
define( 'DB_NAME', 'E-atsena' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'tQ4COGPfMVeYni2yJ8opsWz19jAjOA6NCXxWGf5kTbLAu6e6gmGKN2PFrjsnr1tK' );
define( 'SECURE_AUTH_KEY',  'NR4vFIfc2jPpTxdrWMVSkSkaS1Kim91cQHg4tbKLSrK7jW4o6txN5LBh6fTczJhS' );
define( 'LOGGED_IN_KEY',    'MhVv4LmHyKtE3L99DyjcWqTwIG9cdvhqy9pQdTnTPRlP1KuMrAKWPpJkqq3cYcQZ' );
define( 'NONCE_KEY',        'Bx59szgaPUaUkTTI6iWFPCwBHGBcPSc2d9x4ZU5pLumGDIyz6tJI3dpAxs6fW5vX' );
define( 'AUTH_SALT',        '3p4bPj2P0cI63ojLxbDxDhVO3oHNuit88PKAEIBlKgMYA19KvkGYtiRWz8w6DnSu' );
define( 'SECURE_AUTH_SALT', '0GdIzEtVChvLUuEVsBXawhHZSZbxGYLrHJeXDfcONx0gik8sB3ge5ZMJKRYxKSme' );
define( 'LOGGED_IN_SALT',   'T88T4DMXRuJqQY9xNb322J5GoFgorbLtLSjabDPzXoAgFrEnsUya5wvWH6D5yYWD' );
define( 'NONCE_SALT',       '191d0mdj035DOevBfn4MOgg3OCMgbT0tPZnVkQQCXbWdDSQgVFXvha9iiwFzr7C1' );

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
