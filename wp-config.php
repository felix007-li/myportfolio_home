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
define('DB_NAME', 'myportfolio');

/** MySQL database username */
define('DB_USER', 'weiwei');

/** MySQL database password */
define('DB_PASSWORD', 'BE9mFoyVHIdGF5rM');

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
define('AUTH_KEY',         'Z{QIJG]J|6+d_q`Gc,4I%kXu7`Xel^6K70oH/(XI,a3$=&qXB8BUj]Kt[Hu-od{E');
define('SECURE_AUTH_KEY',  'jb)JKWr>,TI8 ]Z] 9BT$n>;OmhBk}XG>+j4PAQ%iYdM)}BFSQ+F_qg9; aD&.TQ');
define('LOGGED_IN_KEY',    '$5Y6M<zxir?J^&GPrhqFWJ>!>GnaA,JIjrZ2!dt/N];yZp{g9,%08lRU0zJ6c*x}');
define('NONCE_KEY',        'x_a,K.e+,BWV{Z ${S6}Flu6k$i.Wh4.,$8JukNF`|bM Xf}mC2Sr$Icr/:2@Rh*');
define('AUTH_SALT',        ']i$D<;/1bIz9WnO!Q=zJGi+G!hQ>_E`xRJ(~-f%LmT=Ul#dTO7mD_n(Od>CSP|*l');
define('SECURE_AUTH_SALT', '>[^fY-UYQi:>q{fM-9su5[z+MO7$gFR1(o7`N)-SfsQX{ygCSqywXR:gcw_?MMI>');
define('LOGGED_IN_SALT',   'QF@wrAt3~BkD8HT@GQ&Y>H5&uRrM~:{S@fwFh:Hdr;@ IB>SDTk{:fe8&&o+%fN0');
define('NONCE_SALT',       '.1F]?^Zrxl9CG@6QsSwd#&W-7vGe=%aT@Rp<NK0?+hSvD@Qe[JbI(b%,;ijw-D{U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbmp_';

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
