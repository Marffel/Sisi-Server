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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql-server' );

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
define( 'AUTH_KEY',         'KTV{8Ys&5{@v zpAkMGpJe;#[Uo:`Gx@B~hVb=jB4>8>A%oweP_]ZlqQl<<dCpg%' );
define( 'SECURE_AUTH_KEY',  'ikgHZV:X&>*E_#g-S=`)`C:t&b+W%]Me]@~hTii]Z>@$*.7~2t-mNx!sR&SmXz|K' );
define( 'LOGGED_IN_KEY',    'p73EK?,axt{kFMg)WY&J6AyEDN20ZmF:pY8AJu- SZD[iQ&6dpTbW-|Pgy8d9OZg' );
define( 'NONCE_KEY',        'h9?MYj^9BRU/^1zaHM14t9+R!*}ax$ycL.S}PmeZt9g8,XOiah-rsbgBfNT=Zsh5' );
define( 'AUTH_SALT',        '4={xp^yXmIgPiS8CBmvq@i5B^A/%iq%xDt{mRUGNqhdIfP#/#^+7-:pRMC>L8Yj ' );
define( 'SECURE_AUTH_SALT', 'P!Xbg#Z2kG&dd|XV=y_F#=//8M*Ye46]Q=S{Y0A8nYR}6r^)Vy[m*j;![s13x8ik' );
define( 'LOGGED_IN_SALT',   'R5SAf!RAKqbdIhsUx2K$5`@]6{n,;%&np(}L7UVIM3Wsg(Q/8PaQcYERYi~[Xa0N' );
define( 'NONCE_SALT',       'dLw79&~F]Z0H^~u7o-4<[8s^.`># 6=649S(:u<utWTuF~(.WqjpSpphv={]0U#?' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define( 'WP_REDIS_HOST', 'redis-server' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_PREFIX', 'dolanan' );
define( 'WP_REDIS_DATABASE', 0 ); // 0-15
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD','direct');
