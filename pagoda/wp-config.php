<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $_SERVER["DB1_NAME"]);

/** MySQL database username */
define('DB_USER', $_SERVER["DB1_USER"]);

/** MySQL database password */
define('DB_PASSWORD', $_SERVER["DB1_PASS"]);

/** MySQL hostname */
define('DB_HOST', $_SERVER["DB1_HOST"]);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '|9NCY|:->GbzjA)@1:D-To&PSwBt-Obi@S%]$~ L:2eD)<oiM;3->Xak3-R-J7C!');
define('SECURE_AUTH_KEY',  'l9mY]<Z|hE5:d|=3c?fVd,izM.*t{N-tU_@,K1CFYXfos?jHsZ;|)8.8Vtjhk9V<');
define('LOGGED_IN_KEY',    '|1xy<@l%?[=$EZJXI5)) cIJR]fXJ#EJp+n I:cL*n-qcGohz?,/8,A_ll2Cy|W!');
define('NONCE_KEY',        'i(-o{U4LxZB:,mz.vlDzzzZ~#N`16i=Q^UJsYUt80sXK? c+|HOwzS$ogkH4}y+D');
define('AUTH_SALT',        'A|.}^1}I!Jka#e2o?o0qks|b%:,V$!U M+ywbbarh+;-6>1EO|7E>9%R6FCWUI_R');
define('SECURE_AUTH_SALT', 'Gn6rx>`^i)|@_2F.7#uhmc>3!UsGJBn-O{FwlC|#sMUua_vMx`&l5R`NnD-*E7~N');
define('LOGGED_IN_SALT',   '/Qs)Lka4_w-zV+<W@F])JYQV$|Fujl6^Gf5% YaS@67iZ|$&|+SFZQpx<!q`FS(*');
define('NONCE_SALT',       '&z^@zu[[J=C<1V/`w_=kqLPACb?<82?TIi,y/C3Q,EZ(2zg-Behy[Iaep6g-/C-l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
?>