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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
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

define( 'WP_DEBUG', true );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3aYci35U+h1YNkTrsMNrFVjtd6R2WuFHr6z8wQawj52GdZiGE5s6uCr/AhBLSISEvVPYrruSTJwZa6APNWkrUQ==');
define('SECURE_AUTH_KEY',  '4PSFe99VxdEYc+SRq32cQFV+N3gksb4Owcwaa5/iXqW4oYGMVrrP3OQ38tcGrNeVjTwPmR0pOR04N9QauKGStw==');
define('LOGGED_IN_KEY',    'i5geUtwBV+R6rFY0Hg9R8LhWIj6HmVcHCTixIUhYjlG4yKAqhEAhV7nFeGfnu3wK68aAqiG4CDuio9lmVcLurQ==');
define('NONCE_KEY',        'pcZUDqjr8/TAwyLAHexJauf7lBk1yCfIdPXtZuJ+Tw/jrBK7e0gq9vXUgijHFQHK1UKhDZUGIVT6lDKS4vLKhA==');
define('AUTH_SALT',        'gk0AXlHjZAAjWg52Bj/gc7nIMsTBkuGiX39ZzHIJSoIlK7iIczk1+Rqj3fd2yBfOrxrsm4LDa0uunFhrwzAJWg==');
define('SECURE_AUTH_SALT', 'd4XPxUWjKWAj9vZq02v+tS2KbaJdWt8lrCe9JTUm9I7u3ZqxF3Lg8u+gOU8DKY6+0Ybq0q7nq9yJfJJGdwfchw==');
define('LOGGED_IN_SALT',   'kcCJctX1JXA+vJUnYZreRYGlUruBa6ID08a9MHSUGKxVFpkEQ1xCo00J1L3Q1SwRioEdlz6oj5ozgT0f4Zzwtw==');
define('NONCE_SALT',       'cf+R1k9336R7bEQF/dMde3Mbpz4vajir/sZaq1nOgb7GcaEd/elEOmObUQSHyUmyZvY0rCPJCFmNCTjUxzbJZg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
