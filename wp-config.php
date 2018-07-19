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
define('DB_NAME', 'db_wordpress');

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
define('AUTH_KEY',         'YL~.1|D~($ian5%;b9?@YR;n!-9si/zb%uLcq<x|R2p8K2TafT>HBn*|P,29?Kb[');
define('SECURE_AUTH_KEY',  '88;523v2~%)5n286K6Y4IhfigKQ#r5<TRGyu-GnuAQud`1{Vd~yw+6#1U#tfA~-b');
define('LOGGED_IN_KEY',    'H@=|eGRt9fyF(z(b HRM*a0qzQ$Ja7mz{9>|*-e]L0]wiSsf=W8{&nH9767X{[&U');
define('NONCE_KEY',        '-npj#?1zMt<*,joni`/H/{RT~/wC!B!lw2eO^Ya7,V; LC+8X?bH2JjQ]_nTFw7?');
define('AUTH_SALT',        ' C+ovP8St1l:yK71dX|K3j>Fkh`uhx9D,sO7mrCaK#NTFBN(?Ca ~73*`zJK W|.');
define('SECURE_AUTH_SALT', ';po5!I.lb^*9dBS.P>x?1%2SEQo]kSCN4]kh#CgEi[O#ERL%,>M(WvX2Z}:~-i:,');
define('LOGGED_IN_SALT',   '0De-JgW|@a5-VH_+O}c-g#cArjB8C8My@oqc([FMrq+Y@x5,iB3^LCK0+c?>1 #k');
define('NONCE_SALT',       ',w7[+A9AAW+&$t_iJu=]>PDs0o3a0V=2Y]^>kcJ[&{:~sqC^ r@x62b-*w^?+m$D');

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
