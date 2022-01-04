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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'I3PWJMgXb/OibY7RqeKP+rOcpvqmQNmcnmvNxgBmx+6UhMDJ/VG/TSGoUwR+I2Y5L+2cbXfNfWTuyUIhqrNvmQ==');
define('SECURE_AUTH_KEY',  'Qe8NJP3ac9GqSuIJQlEUc6W7EDN9KS9NlCYzeteLGF2A2hIjyZNbfqIWN4DnyObw6SujMCYGhugJLwEiZE1mWQ==');
define('LOGGED_IN_KEY',    'ri3+hlXu1bGeIc9hRMwtGPW/pUWvOabGaBiJuYqRiwllsSuoBA4gcvLwV1IbxEaQQJyyFBDxG2eaoHDABMaeVg==');
define('NONCE_KEY',        'Q8bc2hyYZAATS1rtPKTpHtZU0CQZbIk81Tcx8OLBqzfSEeNOgpL8Oa6+AiKWge59nTWDweRrgxh0j6nF11wN0w==');
define('AUTH_SALT',        'VCktq+URdABhjlwE2Fp5N9WpCB53vhbe/cTUK4TvxAOggWsYx69bEYLEwHlWt5S/9ynAKIezKOpiR4IlA4RRzw==');
define('SECURE_AUTH_SALT', '1qJp51cxbJvnBUoT3ehRyUxR7UZCOU6KYZ7e4TjHSaXe9bOOeFFhjkX7ERVdrNi4qwQGKQZrPfSmF6bUPektRA==');
define('LOGGED_IN_SALT',   'TxkUG/3HyfWG0ZKbR02McEK4g9pRXrkeVNf6uWLKgCqexhg2IUxWFG55OsCZOJKhNBhz2y3Y4oLcCqFlTzO3SQ==');
define('NONCE_SALT',       'FhPvAWGAQEkRcsxU0dLuDed/T2GdA6zUPSEJ00rvsQRpY7LCNrT6QzM8U4JihTlBQj39Ih8PN0qHymxEBJXW/A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
