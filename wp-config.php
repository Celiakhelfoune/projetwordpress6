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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'projetwordpress6' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Z kVS:T;9)QuI FV06E4,)h^ndONamK)F/OtXCd,!JL3`l_CuQ=wV|F@7ZhJk$k^' );
define( 'SECURE_AUTH_KEY',  'uYyyyFjPHJ[kEG2& {Cm6VK/1WO`6mVi4ny{vM!BX14`P/b0Jwx}$~eYebNw,5 0' );
define( 'LOGGED_IN_KEY',    'c}#OgW;y.tKpOq5en@6Kv9*Q_qQ-g3[Q,M/0>LxvW=jPF$:d{e7!~,j`=jffau`8' );
define( 'NONCE_KEY',        '`x.unFH(H#47Iw@h?mNiNsTBs(T71+}P7.;uyB+g/RhpmSG)`gmM-aKOAVsJcV.D' );
define( 'AUTH_SALT',        ':dXug-`qH:&<%$gwZU@qkuG2UpD1eGz}-kiupl=zyq?&XfI=S6s!^t;*1HC%tbLt' );
define( 'SECURE_AUTH_SALT', 'WH<&,:ZUJwS@[Nbsj@qVk fL:UkK##mT}kJ=sQb{D]cCS&Mm|G#MX6te$@;^@L#a' );
define( 'LOGGED_IN_SALT',   '!a~;Co3Kd!W^a%|lwYtX@02<dSRwc~,{U6=%)fc?e}yR}w7X1M_v}Qr)o{ k}A>|' );
define( 'NONCE_SALT',       'aR[+Mcr{N(QGSk_pC/RJQCz*Q)tI[p!uaxVju_g$R({EyX<<^U&xfp ;~i,Yfd93' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
