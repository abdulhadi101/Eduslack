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
define('AUTH_KEY',         'hap/Jizy53R4sSplUvy9W4i3rWDAqaIphIJrGVvsdYz3XFyd08zgUF14saM1yYESZwvq2jfW6ZfYDwh0x4axDA==');
define('SECURE_AUTH_KEY',  '+JO/v8Gib9+FvUfHi9XM3TgxBz/4COfQaO6t7F7f0q0FgCX5b8LwaOn6iZcGJqa2euPbjXUYrx2ghT2ESQriHQ==');
define('LOGGED_IN_KEY',    '8BewWSjtlEa42MIsA8yDQGcv1JtObDw0Ar0EguBZyY4WOwVMhrROmmPVFszVKB0PPIqTYlLxZrJuf6KRHJwaXQ==');
define('NONCE_KEY',        'pbmuPJvwavDEZ7SiHX07TXCqRekUAAT+RQpZVVzMwVGWW9TfMmEx60leocb1UXdOUtYl/DbSQPNAyKBRpzG6Rg==');
define('AUTH_SALT',        'vUgSi9Gt0f8jfrqLyOAYgl9EU8rjSn7BEcpUz9AoEeGps+yyKR5JJ2RsXPUVz12KbrYPydG6aUpe+ORMcmsQ7A==');
define('SECURE_AUTH_SALT', 'A5oxwhEgSfXKPsL2s2b5J52MCWg4A7UbJpVLP9bt2ado8vl35R97+SHlR94jujftLv5U0ShPwRh6ukM28IH/5w==');
define('LOGGED_IN_SALT',   'wofOg5EPaQ2cwulyaBvHvpm9UlOQQ00X+fpD+AEYI2U85lhSwkRBcY3Q36wUxYjraUCvpGijwEBatTW62DJgPw==');
define('NONCE_SALT',       'VToEM8mFejoLGAj8Ee/Fk1aoBHQZEGVlBIDoRvNboacoxVCWt8X6nzN9j2eq8Rd21JH2f/WYmWEiSVj2GTE1Vw==');

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
