<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'jcrisengrind2015');

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
define('AUTH_KEY',         '}s[kE$+ivio6}d/B :/x7Eu?0&Mh$cLgxSEACa6YHVJ`o@qV3muG8r_TKbP!1s|*');
define('SECURE_AUTH_KEY',  'VlTzWQ6L9xUwL`0F|KwSPD^OIWWY#:w!%L!l.]r2P%M%2^ |$K,ot1:bL^:NH2-6');
define('LOGGED_IN_KEY',    '^Pe{-$7h$_Yxt-zA[&rz?!nf:^2Bz_,r^ApV0Gi&t bkMVW|p5lh-m*ZEzG[rbbU');
define('NONCE_KEY',        '-f0zrsQqXi(VI2%qa(3q}Ka*ZOL9C%6bVgtDV|.S_qd+Z8|LrsD-dp}i,dzieZ-;');
define('AUTH_SALT',        'n!*o$1J,&#M[yk|(-5]>E]t$#}#.jP#mKB]X8-?Z,T7u:R|ij3|g6~Vn9c7klp;w');
define('SECURE_AUTH_SALT', 'c=eWNgD/4Ls?g`1oa[(v]*-+2|o4KX#l+-|JE5DQ[[}fIhseyzgThn~Ea-iC<mU-');
define('LOGGED_IN_SALT',   '<2LqZ03U|Y;08D+st4WESe+tG&^a?- &hfm08HLHHnCLgQv|4=N^Vzb$J/^cmrV)');
define('NONCE_SALT',       '!q]l!:}+!h5+G?kryAm{<|{dhI($TgV8Q!Iy-sTU!ex7I1R^esYj&Z=ta7HO9n5^');

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
