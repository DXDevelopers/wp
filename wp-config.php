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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         '3oIvAc{T-$svo?:j5a-$(PY+3mb<]4P&a[w*3RWA*2S1}#=<+&e[R&&2Evl`jdcy');
define('SECURE_AUTH_KEY',  '|$YHMq7S4fJ*|.~!q5k@G}6~ONTxhK@#PySh<FVo2nX`ZL;cz&T((x,7*]H$.E&O');
define('LOGGED_IN_KEY',    '.BI:H)ZnU,cUsF2VQZ^-b62/u=bCn])gD@&JJ1-fM5Q|5[O;&Nj1)hja+Q%|7+4^');
define('NONCE_KEY',        'YG}c+)0<3r^.DBb@h$)wdpe[Y3KMcNs6<P-(,Y~Y;&E{N{v4Gnd2c7BZr)@]s|jf');
define('AUTH_SALT',        '-0W{|sZ%4{c+NFi{{D^I%vq&`E`l!18hw-6/%.TU,@sE=b8+v.{<lft%Z+P7my10');
define('SECURE_AUTH_SALT', '}M}|83Vyu<!ubg|=+9?L1f`--_4+xRD& NnZB`iP{+,+&{*xTM*Y7.[V8Iy=~bgf');
define('LOGGED_IN_SALT',   'D`F~6HVPs`TIuG[<QhKF~[rQ_FKl&WLJ4fmrN8N-iXd6/gA#R1PBZ:,XO5{]U3U5');
define('NONCE_SALT',       '%=0W-t>NCyJ(s*@|4kZOtTneQO$iLO+aas{m7ARUM9UTPo&OCG~#J?L)5yA{UWoC');

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

