<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2&`1}EW9@M*0P Cg>Wk&L)-.P@}GTl<t%H=gfep&[:qUmf?4^F$u{Xr!xS8l6(+X' );
define( 'SECURE_AUTH_KEY',  'GGriGc]l!PQwP|k.Rbfg&/Qg`L&]jXNcu8oL~sidxd5xl}.^ys;H%UWt6VU.Lt&c' );
define( 'LOGGED_IN_KEY',    ':/{)pFGhx~WZq=|^Z)G:-%#bFmcCNt8:/5vys4v|.2`_?O1E(]U$i8rB0}p9iI07' );
define( 'NONCE_KEY',        'VO9ZqD^w=63>J#ql_?~/F#v@bAh%U(~PD6bE}iHaGLoYjLKE:v.#k:wl,o]@Ak%+' );
define( 'AUTH_SALT',        '`aLAX)_Fn5r}jxuq-=O_:c#dH(kB!C7LE/jsif~_<oOiX4ITy)eDX3Lq{J5C%iV:' );
define( 'SECURE_AUTH_SALT', '` MU{o^`.WgV}3Iz=P`^^)jxvN?|+ZNSf2P%w+~BP:?8Xq s|N2K:qLYFxg<$D<Q' );
define( 'LOGGED_IN_SALT',   'h<kF+G4,7Onfmce&Myg+M%_ZHLXRgA=mNSmSYm6>f/; Xl*^k*M|AbO5G.#P1RHE' );
define( 'NONCE_SALT',       'w>}tJNlg4{z_@shF/zY_DfXZ74p`Q8.E1(yLE=sovCyeIIuiu$w>Vv=uGMu$3GmJ' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
