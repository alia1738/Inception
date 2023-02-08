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
define( 'DB_NAME', 'veryImportantDB' );

/** Database username */
define( 'DB_USER', 'coolUser' );

/** Database password */
define( 'DB_PASSWORD', 'amaZingpAsswOrd' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
// define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
// define( 'DB_COLLATE', 'utf8mb4_general_ci' );
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
define('AUTH_KEY',         'cN,H$j%bC7,xJ>^EanU^(F`6tlPQT@F#A+~;o{Xd:Hf}a~6FOGO!;-FZF,=erer-');
define('SECURE_AUTH_KEY',  'Wv`bZ?FlxE4BS.tJegnc^qZ_3FeOgZZ%[ ^|GoU/-l{44 X0|[2APk<^O|Qt-<G<');
define('LOGGED_IN_KEY',    '6suaez+bF+x2yS)7-%{HUAW9Ja5=$URsvV?P$k!h?uQ2/M<&?6~c|tR_Vccma4Ez');
define('NONCE_KEY',        '!oR@WJ-P-1|CKX0]Y@}c{~eYMGM.Efy<`^ h95Qjtx~1h;9G]#!oCJw_O4CkgjC2');
define('AUTH_SALT',        'Lfihh8`^S8<1?v2+FJ+ApNIa*D@CK/-l1YSLB:bIGM)KDUz>&+3l<LR;r*L6j4p2');
define('SECURE_AUTH_SALT', '(~3g%~!=8m6QDtAKHWV-%q4u/OK%4{.<0+yZ0+bIfH6 *#Q0$&mtr-JVM0-_Ma]`');
define('LOGGED_IN_SALT',   'rq;^+=]n5~#_30&_GAy;fG;zR$]/Rn@*);4}=2 &&,a/Hf%[7AAnwK{91s^-gTFq');
define('NONCE_SALT',       'yFoiz-AtU*]TN&B4 O>U6z?jtqp^ENVpuK8kC}~x+@OmQD_i y]x.3a;dMVh+ef^');

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
