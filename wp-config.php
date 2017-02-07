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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'J33uyAeY}-ne}gZ<G:G0qcz;asj1F2X/hq<Cmb.Ln6g7&(|P+pa>?YB;4/<tq7c(');
define('SECURE_AUTH_KEY',  '?E^n51[^=NR&v^z,{l&:;9i_3vgd  W{ECp5.JOVm/=5Ae^UdYv85Aq+t<#hr:06');
define('LOGGED_IN_KEY',    'MIHjcm4fHu)6MpE.adak*Awf#r(6LT<SC}LNLBPcU8t5R2=LP5Yj-CmzyjmfVQ>m');
define('NONCE_KEY',        'rw?=M%c4`F{{}yH&7omW&%!Gi9^F^vlHHV{A%2Be{{#WhlmG5`u{iYfrR#2-*lmt');
define('AUTH_SALT',        'rkrGu4L+}l(*2X$Y~EZ11(K{fS~sjub+id$VX<W{~2Pg`y<#aV&ol:j[S -yYUqp');
define('SECURE_AUTH_SALT', 'Zl^>MciJyF6,QLp{6:,n5%{cujk]#T}Z}sof;/utAR2SL=lN<MvhIW(A@|ypSGpB');
define('LOGGED_IN_SALT',   'k2N{Ud{NMpTl*xBI];bq1l&7XCh>w@fqXpwr+22.d61TwKFx|YgL%:Nce]e*Lp7k');
define('NONCE_SALT',       'qCA%9%]xf,h t}pi`z,Wu2a<Mlsjh?UA2,/;W!jGP5DnX9[6=pG5Ex 9Boonc2nA');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
