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
define('DB_NAME', 'blog_haulacp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[|@)jQ3!kom<# XtLsvYD07&A}-7SeNoQA?QrN^_Vj&tJhz>!X=j,sMtV#ksmjF#');
define('SECURE_AUTH_KEY',  'l43AZ iF<[$:VI;YCmY-I.@N:6m%:yQ[vr<8}qejvG=0ufm$FrhN&_<~c%=a6fGk');
define('LOGGED_IN_KEY',    '%Y@t<jWr/Z!NO#IvK|a^Qd%&YOjIK$Ry^DMw9**w$ UD6x6u3P9D~`[mG+r*Q9jP');
define('NONCE_KEY',        'vqPJ7R,wXG-.6v&1a_T@_/XWp;gIgzc#{;7!e)O]:0hr;[<C]Kzz0Bf]CUr(.}(}');
define('AUTH_SALT',        '59SInbv?IX]?h.6<yWLA5h1a>wA& o`cc I(lUK5Nr416SWm?zxbyRP)Va>&e]cV');
define('SECURE_AUTH_SALT', '+1V{VbC(~@ 7^%,`Phf-T[Xa@-BcLk, <oEFZc!^B9-.RdH5Lv]gSBktvi{+.oD|');
define('LOGGED_IN_SALT',   '6{%-4mk8a!X7$(7C,C:PmtU:(4,/!prYm*w[^go6t>iZCN9 D_F  56rfm!ai$~B');
define('NONCE_SALT',       's| jGWjHBXgk.^M(.c$=av9p>Gc,@*mJV|ExgmWF+cwG(im9IHf.uw`$ $Fxv3{&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
