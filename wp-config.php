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
define('DB_NAME', 'villacen12509');

/** MySQL database username */
define('DB_USER', 'villacen12509');

/** MySQL database password */
define('DB_PASSWORD', 'vill99048');

/** MySQL hostname */
define('DB_HOST', 'sql.villacenzina.it');

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
define('AUTH_KEY',         '2h>8vW=1.q26(ovLS<zc.PkGfhby@`2n [13X=H!C>jci!!{uDkJHH7@(,Gi]9am');
define('SECURE_AUTH_KEY',  'i$[!zlf/Ujx| ~GEW#yv||X5k>{*.+0&ameL;VJd(N~SdmS%&)]mr*Yy_{z23{Lm');
define('LOGGED_IN_KEY',    'BC-!zJ{47>FZV1lF|2|[xSi>HP<-F7&BQO,Ow9`IN@QB5tWPK=19VrHP0]XK-t+?');
define('NONCE_KEY',        'Jp$)8<DX=CfkNP/tB|W,bSNchn({qzhv!d(C{6LclfO;r8NHFbw@`GEx#y^aEI{,');
define('AUTH_SALT',        'J80rBU,U *|5nM5C=zv|&g@>WhUZLbGqvFE+juZ}bPZ!%0JXRMXCd(p+] %CwB6s');
define('SECURE_AUTH_SALT', '#+=I-DohOMaLeOMeYvw~muy{B%Jnp~J/v<p@x-v!ByG]OfeW$|p^KJeNkO3hZJ&a');
define('LOGGED_IN_SALT',   'Tn69iIxJ4iT>+/DP58]{E@.[X`t}W@86|fg<@|pZ/-yfz Y&-;7n24f-e%09)kjN');
define('NONCE_SALT',       'u]TVL[1S_}t|LawwG;^AEX3{cAUA%(^# -2/-@/}~-%K_tgY;B6@-2-^r!:?+5TS');

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
