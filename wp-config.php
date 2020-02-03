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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', "theraqf2_wp740" );

/** MySQL database username */
define( 'DB_USER', "theraqf2_wp740" );

/** MySQL database password */
define( 'DB_PASSWORD', "W[PCS27p]7" );

/** MySQL hostname */
define( 'DB_HOST', "localhost:3306" );

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
define( 'AUTH_KEY',         'nuubxdmelrpmpa4zgil2tfcrfes238bsn3gglgcxphus75vc5hujc9jdlgsr1mdq' );
define( 'SECURE_AUTH_KEY',  'njk09ymm6xrbjje9epgtkkqonkrcdeyuyf9dbrnmpwvdeu71notmqjngrumnuiqc' );
define( 'LOGGED_IN_KEY',    'xzuxrlai4zi9qj48i1yg5rszt4t2pxzjnkbkr6fowko11qqfwqyocisbdtpohrs8' );
define( 'NONCE_KEY',        'qtmhovceptmah3pgc4epoueisar0f3mwj4yfeemlthudaujbfdyrjgyk8baj0zbo' );
define( 'AUTH_SALT',        'lltgxv4hjxzccxygclpixirhz1oqjkewpf8lwcacidy818op57mx9zvglbwgxd4o' );
define( 'SECURE_AUTH_SALT', 'wtbwivu8w61gyy1skp7rfjvkllx7nf5pbjmyim9ojeqvsucyet3ds89hpre6dy3m' );
define( 'LOGGED_IN_SALT',   'r5juie3qdm7ps5rxxvaop5ch9yzqvv3uqm9cujfbfgobf4rzoakulh6rdh6azno9' );
define( 'NONCE_SALT',       '76hqrqe2w16h9t3u18ghw9d05sjpcovil4bqw5cwskjiedetxrczt13zyon32lk3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = "wpem_";

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_DEBUG_LOG', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );

@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system

