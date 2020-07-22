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
define('DB_NAME', 'applovers_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'KI7LXNKEQ[.7PCx7^k_6^a) ;j8+9|Ak~%}u{wSitNJ^E+(Ke=s+=|G`jZ]d#ygG');
define('SECURE_AUTH_KEY',  'cOb|/^/nzL1WC0;N4*xr^ee?%o0uy<u<elvvuxmm_&Av0Y}?<U/I.*eG3SeZF5BV');
define('LOGGED_IN_KEY',    'wHzWVkFE6?&l3;9Z4V?@~`nsqZ9<H>N9>!XP9e(40q&CP^4SpNj[~ab|BK3[wST0');
define('NONCE_KEY',        'a9@u{=tgwcl^lij0~;@|?]zNUnPTh~?ucYXTefYjvWa_7NK%xJ.q)rSAz`aoAM7n');
define('AUTH_SALT',        'ZQ,?kfpj*&&P;!6aSoDNEiFSV1bq:o*c]!}NQ;K$lpI|En]`IInlfGTE< 4fxkGi');
define('SECURE_AUTH_SALT', 'gyJ[KhU.?8Ceo^F>&/9!yX< QOhPkD)w?njY`yqXM+c)FnP15vk;mK{Dv8?I3)HG');
define('LOGGED_IN_SALT',   'ZGunIChalQpiWa#MoSW:3wtL*S[pA9B0p&uhz==|K2/:[!-fQBA{(Wp6.ShUi`ab');
define('NONCE_SALT',       '0hBQ=rIwZP@ctlP(iqh0Uh;hB`.lE&Penu!@GP9WVf)u*&]zk0 IW=]3^u#J/f:b');

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
