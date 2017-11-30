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
define('DB_NAME', 'wordpress_website');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'db');

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
define('AUTH_KEY',         '%<qu.PvuK6-o7@5F.~&FlJ0W ERZ|o4M=Lt1|.h&.hY)a6TS=BqgKCd+8#1tg^m_');
define('SECURE_AUTH_KEY',  'G3[/limgwLB/6L-V+J?GNlhqgT-+kZ/^z5pF|l[c`KPXK8LrgNdIE:+0oxa?D]Iz');
define('LOGGED_IN_KEY',    '_T}6i_G#}jG<L~S|vkJ*h+-KiZs|{cBI.A?aXOX_^wcC0e^M[lE?!@x 2N`Wm}`1');
define('NONCE_KEY',        'X6c0E4+9`0I{Ea2dJfn)E:T9||aP?![!5[u[&W<~P&,caW(p7MI:+tx#_{@|Brde');
define('AUTH_SALT',        '~xA.p,Dn~yr/:Y1937-~9f|.;|D{zaW8W|p4 c<Akhl>Z.E/0ifOG)Yz3FbB3)p3');
define('SECURE_AUTH_SALT', '_P%[~^q)#Tnpy;F0P[Vc;V#(7MWfeSW|36*@~cccTRS!u]z>#`%^{~ L_}]YSG01');
define('LOGGED_IN_SALT',   '+7xEUs/NB>qGT c1Fsz+x:-@IL7`jhpt8B+}Xa.D-^X-hi^-F8/]G)S89hW|,[@D');
define('NONCE_SALT',       'jU)Ke2tsn2|:TSUP`-LzIIC6bA?TUszYE Mqn9TrUEQ2i9zO15@.cg$N3+%j`w?W');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gw_';

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
define( 'WP_DEBUG', false );

define( 'WP_MEMORY_LIMIT', '256M' );
define( 'WP_MAX_MEMORY_LIMIT', '512M' );

define( 'WP_CACHE', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** Memory Limits */

