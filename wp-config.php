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
define('DB_NAME', 'adventurDBggg52');

/** MySQL database username */
define('DB_USER', 'adventurDBggg52');

/** MySQL database password */
define('DB_PASSWORD', 'z5pumJBYM');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'W2at;Dmq.DT.<Aat26Pq.<Xm<AEj$6PT.<TmqVZ|9Cs_CVZ_1Slp5Op_#Ke~;dh-H');
define('SECURE_AUTH_KEY',  '[et:HKw]Kd_#9at9DWx]PTm#6lp_DWYcv0JN@}Ngk[CcsCFZz>RVo48os|RV~!1hl');
define('LOGGED_IN_KEY',    'bYjBQ$>N,3cr7M@}Yk0Fr*;Xm2H*;Ti{AmETy<Pf{My<IX.bq6M[9l-Sh[9etKw#S');
define('NONCE_KEY',        'D~Wi#Ht*L_2Xm;Eq]Xm<6iyP+{Od[Kw|Rd_1dtKw|HW_Dp~KW+]i;Dp-c@JY,0crC');
define('AUTH_SALT',        '}gkCRzw|No[84d~GCR-43Ay.QMXA6XnEQMuXTf,FnjyBb,^cn30Bz,^MYLWT+');
define('SECURE_AUTH_SALT', '#1Kl-$brQ$Qj0FrvBQz>UkJv>Nc>}Yo8N;E.Pe]Ejm2Iu.Ti<m$IX<6bf{Bq^Mb');
define('LOGGED_IN_SALT',   '<8O-|ROZ1ChdpGSO-|dol#5t~KGS[51St9LHp]SheBc,40YzB7Jz>RNY0FokvGRNz');
define('NONCE_SALT',       'V8NJs}RdZ|1o-GCN~[|Sd5GCl-MYU$7fvr3Uvr@Jj}>7f^B7J!0YUg7JFkvNYV@}k');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
