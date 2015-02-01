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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'JorgeJuarez33$');

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
define('AUTH_KEY',         '+H<N)opYkF Em&cG)s/]uMRgX!<M.AmF:B!+Vd}6 9Bf@lKw5+:)[i^or.R;HfN;');
define('SECURE_AUTH_KEY',  '<#ZdvO`od!YrnQJ%:<!z,ZyZnJUvU1#DHhFhYp &n#MqY5xm%%`XE2f<xL,_<O]1');
define('LOGGED_IN_KEY',    'UCT[_e4<2t**zyx97V+&w-FvO7.:5t$89WjmOKqutJHo|5J4o}R#%j#v-w;?bD6]');
define('NONCE_KEY',        '(Mi#>d$--M@$|6<9+.l-M^o3~}+(|qEyuAg?-P?wfMi&dlK}WR?5 Yc8 YYk;!4b');
define('AUTH_SALT',        'tCh951txP+P4q`Pf0V8xFPbkY*]F7|_zi/#+F|X+9S1eH`k%KgF4+N{5Jt$7;iDW');
define('SECURE_AUTH_SALT', 'cT6H+TOe5n0u@JU8zLB6^h/FW=W@Xw&:s#QK`|%{|nIgsc5RNlI-+rw:?[JP]L+E');
define('LOGGED_IN_SALT',   '.yri>8`9pfR @b{Z(y^C+j%`+$61)pscR?%&](O%/YoItcHy$Di#J||RU=e33wV{');
define('NONCE_SALT',       '?I^@lvJE?un=u,|p<}E[Q)E*=E:Hj]3nA-@v:~*>kZIH39QH?x[t5i^)|;E[_%FN');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
