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
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '}<$vGto#Bn(cL+!T[?-B|idZ8eGtbh&ajpDdaxUpLb^.amY8JW-Kb:COJ,Z[;?V_');
define('SECURE_AUTH_KEY',  'FlCh[OJ@pJ:Z+]D/@;hig~y^lOW/x6Ee4-oB}[*#L)Mc+._SN~2,G_?0Ldr*xC`9');
define('LOGGED_IN_KEY',    '`7mo.=>@OBlSrwFYMD3Vs|GL_Cjv>XD2V]de2BZtT$UgStRaZ?Y~FYpLu0l+Kyih');
define('NONCE_KEY',        '6oij[eq=PJ<T}wA{SLLo?XpK}=`IgRC&MD|4RbEUl:drC{,9|u2b2D[V_T# orw~');
define('AUTH_SALT',        '(oPnf%-%,q}4vu,>0U(iFmv4BSq@7Lr@i-03BEZJ/.Mk;D=5mc.IIi0)1i2]Qv9#');
define('SECURE_AUTH_SALT', 'PvQV?uUs!r:R4(6R@>2mJ9%ZzY%Zd,_HX_9,jzd]feGi.aqU!d!B] >&>|(Y9UWb');
define('LOGGED_IN_SALT',   'gP<% ^hqbkj=t)1%<$0nw|8Q2E,,Kr4YL8V@fk|qJC{1JeR(5]s4 th|tUr!$j_+');
define('NONCE_SALT',       'Ceh,-j)He|9da2P4S%8:K;KF>p4h l1~ob`[bS7<G9ruqlGlW;8E3N9qGa-pI|.|');

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
