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
define('DB_NAME', 'intercivil');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '/<( cPOinj79N&O*JJ=i3G!-NJ~Q6ogd|o4/L89~#Lr}?eUe[E8<dG}|HfCU|6Ho');
define('SECURE_AUTH_KEY',  'k |--p%4V|_Qh*G2W.8l-PxU_E4p@B}HI<S^FB?N[+$T{B9[o?m/v9 VV|(%{G/Z');
define('LOGGED_IN_KEY',    '=qXPvP,<5lf8J:-&x:V4Sjp|7;*{{Sxj 22J6&!{+}H&1|B4mY`MLni3W~ti+tm^');
define('NONCE_KEY',        'R6BaH!&]cYEFbAv1>)B|C&1pf[n1uxQS4%3QzfgF|*HGf*O%^Sahmb4SCt>e?]IH');
define('AUTH_SALT',        '4s!LH#nq{q_YOF{~R`XiRwmnw ,/E/-xlYezco*^@D=L:|OzwY`-GJ@py#5Os$r)');
define('SECURE_AUTH_SALT', 'u^l!m^nUW)Jm`S6f*VX-i/FD~s-T]UZGdl>%kEqHk>l?,O<_E i|O-%qm;*,w#L`');
define('LOGGED_IN_SALT',   '-7N&z*0@RHmWc+jd4NGA(:p|2jP8&kW/i}{P7/7f$Vs0NlG~<!hsaEpm5^r-(`gx');
define('NONCE_SALT',       '+S64ir(%n0J]ocQ|@;,S&oO+1L?TxxcV,YW>sBjl[j!S&a_Mc7$d1K@@9Ho,%a X');

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
