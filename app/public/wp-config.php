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
define('AUTH_KEY',         'WSz87ZnTtF4GCEuUxzRiT4Lm+ULHr00EaDNUkwTNbkWwHDPm7+jsr+dvGlbnU+ZVA5NAHBtpJBzFbGc6ZN3ViQ==');
define('SECURE_AUTH_KEY',  'o06jZPulUOpUgQCPr9uyS6W5mMecg561orQhadK9lyUS6XIcca+jKLfzxnZaIrkwQvI7hnYzvPeWr4NHFpSIfQ==');
define('LOGGED_IN_KEY',    'aLOmdbnkBddbkl4XabiOPwY+ECQT+w+Dw6hERJLf7JifswzlE4yZXrEQVlzel0GW3ReRpXfyVGTrwxk6g7nHWg==');
define('NONCE_KEY',        'frRpTtG+J7X7N7B+LpHV7tKcnwE7dg8fG7Umg6JITL3xraLY5uuFKP5ycEZlWedA62b6/7T4Z2Gxa2en2g4/aA==');
define('AUTH_SALT',        'qQJ1Jn8x3FDggP2x4oqt97QkkoNj4Ygoyf77VM4V58s0Z4CQdTwjDlO1BboPHD2ceoqam5fXoV98WfX4BMujGg==');
define('SECURE_AUTH_SALT', 'E5CvW39mex/1s4D+my73CWe/UlBpbrbtuOs623aXn2/IvUF4aVRdZC4WrRENtmitIAT5+vSSRi2EDBGyunh/JQ==');
define('LOGGED_IN_SALT',   'KAzxVZAo064mARUU5kXjwTS2KOvdzYvz9CL26RukF1py5sMa5TXaC4HeUVcAG6R0xiwrwSrrCQAS1tqFi5+wkw==');
define('NONCE_SALT',       'I/n+A0Pxl0UMO+3bgkNBNK9Ucn4hGrWSSknYxn5fk/0fzjwt3DgkPtjy4zP02ev4317vjPWn4iQw3Mt1El+rNQ==');

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
