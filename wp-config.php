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
define('AUTH_KEY',         'b|11d2.TyMy+G`Th!kW|+SD5zP+/brNdV4~YZK|e|bw)4N`Ti6Toi50Ya6`O};zW');
define('SECURE_AUTH_KEY',  'c6_n[w^&Ay _7<;Rlr8+`1W8>^.IF Nug]fgrUTF`[(zOPm4=NNtM8&wCH BD-rB');
define('LOGGED_IN_KEY',    '8P0?!k;}DS7UsF)P9KH=0?@*.)~OZ+#s!r_w>rfq%(1^-uQ%.&sZ--xND:$Wd>Q8');
define('NONCE_KEY',        'MHzBqL,kS%}L*Jf9{18cX/ZtRdx$V}}_zRwJMWI*K;eJQT@%!Or,/2/p5|#6uT!Y');
define('AUTH_SALT',        '?{l7UYhtiu|?7C]8P:>q:<=a(yNpH{q87uIGt:(ehgJZ!c/4T%Z5{O-%#qsZB~=$');
define('SECURE_AUTH_SALT', 'Y5|x1dB,R4ut4+O}r.X[,3S~Bg.2OT2JMN|O9etZZy*Ja3S)8k:gW|tB#>^--g3?');
define('LOGGED_IN_SALT',   '-%9)-FrqTo!C_WqpI2=6WO)t@o<!s*>c=l8T8,rWboHG|;=<kY&%xmwUx++V+.Um');
define('NONCE_SALT',       'LZ^7fsULd#:|L+acAz/544OChc*?}sMwI ^?.sQ|+IC`N)<+Kooa2uanQqid1[h$');

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
