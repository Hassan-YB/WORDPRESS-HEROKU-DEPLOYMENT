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
define( 'DB_NAME', 'wpdatabase' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'JWDsRI 8<oxV`f4]UtU#P3jJBzft4+&Hd}N{P9 F`_wY[S1ZwJ3{4#!AsVv/,[G;' );
define( 'SECURE_AUTH_KEY',  '!,|rsmdEI_-1%GwpJek<Rz+|f>y=c=%w-?)gJJ#:G$vIr^LbpF^i1+-+3nBem?qT' );
define( 'LOGGED_IN_KEY',    '$5G-2{Bs&Nscc_;(]=$]6(?i8b#]O n?}2K)*pC!G[H_iQ vU) -VF~kNWEXchuX' );
define( 'NONCE_KEY',        '[zvM]eGGc8smbq$xtT)RM5Q>pBc9QdGBR9fPk 2GO ,hM|u$[.*<HOqhQv_};Ed2' );
define( 'AUTH_SALT',        'ckeyZ w7)J}>b)4[fFx4d%cxD7>v-<UPW2<dbnsmho|JFsWx,p6ml[aL_YuC0 R~' );
define( 'SECURE_AUTH_SALT', '=5xPEYNwCUs)CJ9UcszEv&_Uade*{esgF_pk7m`og6zQ%-QAN5-~MdZ_RBb)UQMM' );
define( 'LOGGED_IN_SALT',   'u}YF!J6wy$$R5#5#Bw7Y5HEI}i8+QE0lLx#{:LjWw;fvql^Yp+(XUW67i=yM3g:G' );
define( 'NONCE_SALT',       'IAso.H)1#IN:$[9~NpT+&ZgC!_V^ zJW.o,2X.P9Co5H5xklM?;9qTYje($KV8y5' );

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
