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
define('DB_NAME', 'wp_kafnu');

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
define('AUTH_KEY',         'zMEl@58kiZ}&;B[ZW|_;UspG/@-JGlbfnyZ05q(@3/?-;CWg#Jqm.=5!f.PK9SP6');
define('SECURE_AUTH_KEY',  '_^DSg{wQ%Tnm:|C;0:[t!*+~?/YAR~?>bo-fu?)kj|woOmne{2&VW!WTcuqD/[EB');
define('LOGGED_IN_KEY',    'XWIwx_y4/N$KZ(5cIgwa@mAP1O(9EwqfF94^z7WRoeqEg[Z%m@w@{EF7j[_2bY5Z');
define('NONCE_KEY',        'L#G@L2d5GAgp=lCoPg:=D-K*Cshrx~|iq>3SH=S8t.Xr6af5RXE/`d(QQ7ir)sI>');
define('AUTH_SALT',        '*i/p,km8ki4n^lBVdf8gzqJhd<=03<{o6T[<Wn1* dc_C5<:C!|st:tWId=9*X50');
define('SECURE_AUTH_SALT', '>4L*tGW4GJYZ;:|ib8_Z[;3hPl&:;O/(V;AsT)TeWdzBpLxK`n1:>_}*_Nk;M B&');
define('LOGGED_IN_SALT',   'pLMETYt&.J}ph&`a`5Hu_e8R?dULwGGJ[6_vz^%L1}.b[k-/lS)wUI)I?C6RJe{;');
define('NONCE_SALT',       'F,e>_4iXf_/>@X~sw[VOad,pFD1./@}9D*qfO}h{i5$tyQ.lx5=PW+F>:i6.)}c<');

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





// http://www.wpbeginner.com/wp-tutorials/how-to-install-and-setup-wordpress-multisite-network/

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );



define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'kafnuwp.dev');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
