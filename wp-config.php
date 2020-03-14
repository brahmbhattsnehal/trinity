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
define( 'DB_NAME', 'tt' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         ' Z/}T,|B&<R,Phj@#K_-Fx{nvwwMRM)xM0Gf{>[F0{>x.t{1V{9xCYcChOicc|<H' );
define( 'SECURE_AUTH_KEY',  'i)i#-2coj,6g}_3]@)XA-yi_W.*/7)pYJ^nX6M|#|/AJa4OF* Je9c]2Db)RjXh+' );
define( 'LOGGED_IN_KEY',    'Rajkyz-r*ym^AzHN<,B/,h$<D|k],|t!51ew4j*y [P;`LuHs.DOE=G;uaxqQ+4M' );
define( 'NONCE_KEY',        ']n;j< 1OE2wj]Iq~,,^HFTDVcW8p~t*F8gKFw#w|_]C=~OdEA*mU]6-x>bjDYsTk' );
define( 'AUTH_SALT',        'E:25A6!_u0<Nf+NCNbETk:y)-8ko&yO2OP;UZz#cD)E#.1$%0hi4Ki(+p zc1CE}' );
define( 'SECURE_AUTH_SALT', 'd-_gOV--,:[7=]}eno>P`0pHnkt,=wM;$pZ<TUT]%%[:#!Z7X.<_?g,BB;v)H<&%' );
define( 'LOGGED_IN_SALT',   'C8i7)|^ua4Xr^n{2}rwg_hv$3.3`:b2-|1ojKDREA)&~nGY_@#fu?g0q72!pcn[P' );
define( 'NONCE_SALT',       '5.jQEV5w4g/G_Oau{l0 d+R:xC/;c}@*@%C2mQ%As)-n5/OTG]2!/=a3]KxfcUZ3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tt_';

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
define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
