<?php

//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', 'uXHw7RCn65PYKvwfwicDuzemkZ98EGvppRWdmBfRSVBY4UYp4pQb23rYURTo2Bim');
//END Really Simple Security key
define('WP_CACHE', true);
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'u517448849_cwYHD');

/** Database username */
define('DB_USER', 'u517448849_DQwa9');

/** Database password */
define('DB_PASSWORD', 'J6wxVkTcVD');

/** Database hostname */
define('DB_HOST', '127.0.0.1');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',          '9jV2tizXKA-d5lzjl :M?fjaiW^D,5AR2+AGFFrOV>,6pDCfUe]O9VU2wjCQyx]p');
define('SECURE_AUTH_KEY',   '/AblaM[Zj,Lp^;x!.MS3v5!r7U0C0P01{Ea|4U^^TrAjPK3nbq6&U{v}E)G-Af:X');
define('LOGGED_IN_KEY',     '?,HWCpAA}iyho:k1a%08v*cEXC6$Gn3`4JrYz_a1VG6aYG~h_[f_KBx!G8=G#7k=');
define('NONCE_KEY',         ',Pg8Bg8d0#wm4g:!M8gb92u0sbuT:gz^WM%Kp.)Be=%<$r<pH=5.{5<xMMZbg/DM');
define('AUTH_SALT',         '#ENxqg8N:8hB4zgh5qj~U?P?WDamDTFUqIX2m+Pv@AC*xtH!-_!M~)q`(< yUb)-');
define('SECURE_AUTH_SALT',  'xmqEJG!L/-Qu[J?Q$BB!l#=tc:&=la*OaZDqJ0bI<3)7g`c65x^-5)tDr-x1a0z@');
define('LOGGED_IN_SALT',    'OPi&fw,>1+]lPyN<91ehHyohfZ?o2_s:DH!EP]#y{{lwn-ZKuR6l!g3*G,m5_WBu');
define('NONCE_SALT',        'l|RWCsS&8pWoe:LBB#naB8,zVD+tBEJ|.KY?M2ZBnx{ez#OnW@7/Rbbw v]G Glt');
define('WP_CACHE_KEY_SALT', 'X9raB`7DET?bI9.S&b//&]H;wSvHs_I>h@}i[eJ[nYl3$sP,cKrDN&W+f4$&hN93');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if (! defined('WP_DEBUG')) {
	define('WP_DEBUG', true);
}
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);

define('FS_METHOD', 'direct');
define('COOKIEHASH', '5104c8322cfe825d0325ab5b814c99c8');
define('WP_AUTO_UPDATE_CORE', 'minor');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
