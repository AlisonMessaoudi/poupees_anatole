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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'poupees_anatole' );

/** MySQL database username */
define( 'DB_USER', 'poupeesanatolewpadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', '_P4w_cmAj2XNrB7' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' ?R%UqvN%-n~aw1Ij3;:93hw/.{B632i0Lze *F}g,SmxVzm#Qs#!<oO=L*>J=Ty' );
define( 'SECURE_AUTH_KEY',  'l-&SJwd.ib3gh|5hfg/0X(+Zy<ubdy;jB}.VU3kf1Jg:M(S[>l~dn>D>Cx!:Ed|!' );
define( 'LOGGED_IN_KEY',    'tdkFe{Xv/;9_HiUtXS-G5^me@a[8GOLoEpos2D5dc/:U0V/Ie`G8Ete6sj8loh~4' );
define( 'NONCE_KEY',        '_#yhdeI ]Bo#Jjaoz2-#hv!ot^n!9_hT9P43FtjOiqo_$SFJJ{*G] 7rcB2auV8@' );
define( 'AUTH_SALT',        'SdCR8J<!kdk8c7(Y a9- D:Cm6;vMv:dq_$I2:#rnhQZoW[qn`u;B 4x6H,_:7>E' );
define( 'SECURE_AUTH_SALT', 'I*-hUZH+u<HaxS[~n+{Zz`#jm9A@wCJJsf_%A~lBw$ZEhZ$Jm0XBh[.p:*}9(:-3' );
define( 'LOGGED_IN_SALT',   ',yGn^$)Hi%Lo=GIiH|fx9N/tZ<b,>ZvA)d]i09EIEau07KiEIBF#8$blm/O$~IiG' );
define( 'NONCE_SALT',       'v(Hh]),XH&UpQqujEOYsW=L6%s#i0rB<e8xQd*;S)aKY]jH:[z IZ2>!_.YDN>H$' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/** permet de débloquer les accès et l'installation automatique des pluggins */
define('FS_METHOD','direct'); 
