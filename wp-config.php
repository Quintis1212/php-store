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
define( 'DB_NAME', 'RogalDorn-shop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uOIxnkt0HoJsjCoE3t73vyC0Uv9qOCoi9xdCLMFMlALLkKWdi8h4d8ivYsWcjGRW' );
define( 'SECURE_AUTH_KEY',  'XUClD04vDekAOUjU4Cv5MyXarEMH98tNYqPUF36bCfzbzDcvnogNqmJQcsIUvVKG' );
define( 'LOGGED_IN_KEY',    'B0evTcRUQnTHaipikNHXLUfsNukRIDTUSJsLw1tcUH1rUmPp9VuTcqCWFCzz9Nzy' );
define( 'NONCE_KEY',        'hecJxUvx6aQohUKi4oqeU08CjtFCLmZKcxi0NU5kbvWhFQlqQjntSRbooc42rnM5' );
define( 'AUTH_SALT',        'CggHkUPjaKCGe8rnExt6OHc9GGn3POr3o4VS1BSRBfuovRiNeHCeSufD7Hnm9htS' );
define( 'SECURE_AUTH_SALT', 'co8XxnV3YzYFH5ytrVf5ch974BlA2qTUHWFeJK4uXpxNlxdi8IiBZrMmWPPJlPTB' );
define( 'LOGGED_IN_SALT',   'wTfFzFg6l0aSZhMAD4B6pRne5r5uAoZYGVMrjnH0iIpDR59PwWN0OtOfNvkM6Bdj' );
define( 'NONCE_SALT',       'tqhxObvB6QFW4RddpjjGSXx67EqrIW6lI7rt8J2mBJ3CmrwWEXv1HazTJZolzHTt' );

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
define( 'SMTP_USER', 'mataleo1212@gmail.com' );  
  
// Пароль пользователя для SMTP авторизации
define( 'SMTP_PASS', 'Armbarfrom1' );
  
// Хост почтового сервера
define( 'SMTP_HOST', 'smtp.google.com' );
  
// Обратный Email
define( 'SMTP_FROM', 'website@example.com' );
  
// Имя для обратного мыла
define( 'SMTP_NAME', 'Вася Пупкин' );
  
// Номер порта (25, 465, 587)
define( 'SMTP_PORT', '587' );
  
// Тип шифиования (ssl или tls)
define( 'SMTP_SECURE', 'tls' );
  
// Включение/отключение шифрования
define( 'SMTP_AUTH', true );
  
// Режим отладки (0, 1, 2)
define( 'SMTP_DEBUG', 0 );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
