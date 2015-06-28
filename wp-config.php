<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'memokola_paradoja');

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
define('AUTH_KEY',         'Q/#CMnv]@|-h)X_lBk|WV4kCSmefNuUt.2B=+WZno09}t+_>?*bA.&i<IBp9>dn_');
define('SECURE_AUTH_KEY',  '2`&*4zA7!eK)^?jZ0sc7~d/r<AL-~-j(]U$HFBu}} uiGQs)7`TU8+biG-OJH&@-');
define('LOGGED_IN_KEY',    'w2&9~LW}ksC`]N<6DOD$4,&on3SV<PnIHBd2-A}smE2}`)U004aDfT?1A Gh%RN1');
define('NONCE_KEY',        'URw(4+tX9Mi`k=)qgL8*>2$u_|(&7ml[@ww4%+w}72Cv=d+zv~JYEr?#AYUM-jJU');
define('AUTH_SALT',        'eM?RO[+he}aY@;pT[p(T,nE1O)ub>~}Ff8OCNe(|2,C+VI2GV;<cH,vGE@Z2Ae+-');
define('SECURE_AUTH_SALT', '4T:ZZWFJV+{,jv9F(N|S||ccE.^:*y4Xp]5|I3z5*|-6l-^ yS[Zr1m*mTaEhk6a');
define('LOGGED_IN_SALT',   '@6ssFYIREwhsX{NnO-T9xJrKvM8BJ|P).|zX82/[*<:ZAe9|>Vj|FMjbqWf|-q|~');
define('NONCE_SALT',       'zP=5Qt>cEV/yMH&:ePml`m<hK]XFU--Iw>{Ka8kN{]I#k({5*M4H+QHmFc(+RY2U');

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
