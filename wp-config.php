<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'La_vie_des_plantes_db' );

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

define('WP_HOME', 'http://localhost/la_vie_des_plantesCEF');
define('WP_SITEURL', 'http://localhost/la_vie_des_plantesCEF');


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
define( 'AUTH_KEY',         'a_R$t!vih2Ei32!v.$`Tb[U`:?M^3NlX+_qna0HiieiTxfqf0l^k)B/NVrtY&AC/' );
define( 'SECURE_AUTH_KEY',  ']ZTPi<.0.SG2F}?j~6u$8%Y$>{ghrSYWf_QH86zjm75QhNEL,2Ey]d*%^eE])VXu' );
define( 'LOGGED_IN_KEY',    '$rsMRw^z3r5smb-nf&3qX9J)|`!/NJE{UIAf.vy5$e>|41DSWKaB~:mb$+4Q}vqc' );
define( 'NONCE_KEY',        'E#{X^kwB G7p3k)W9@<`B?J1>xC=7}zNj@ n<:K6==sAd3yk-I.%nr`%mGjT6=_|' );
define( 'AUTH_SALT',        's_i`Rn>o?-0`<:))[79f{j(,`%`7+Iy@S93q&Iv7!MWRph.nvLq.4^ fbC5E./:w' );
define( 'SECURE_AUTH_SALT', '-Xi5w}/586`04l,ILZB4rZ]k%>{:r*}[kw$i-vpF&%O|!}?g2h[*4Zo`=:Ad9MqK' );
define( 'LOGGED_IN_SALT',   '3X>%.ZjpS}o:+;BGOx;EE,Y9Is~1=bv[eF#SF/-93:]+w?{JV1F1q 1hleXu?a6u' );
define( 'NONCE_SALT',       '[G(UlLpMi.:Ep!h.!r3a%q<g+xJ@Fn}gEnY6.7F2@em*vFG<*sn39;MR!<P|i-~t' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
