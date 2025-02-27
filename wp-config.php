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
define( 'DB_NAME', "wp_prefeituralassance" );

/** Database username */
define( 'DB_USER', "breno.miranda" );

/** Database password */
define( 'DB_PASSWORD', "breno" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'ys/}U|R3$wH`@IF9Js<@o!=~h6ZqPhD PWyNiOki?;FZqAz0>1[$ki+bBJ1s)SC%' );
define( 'SECURE_AUTH_KEY',  '/EJ[MTsSGw6z<gI-:w=tWQ%xhu 9~i;&(?LWy,1B:yTEwSiwU4Mf`vE+b( _ruXS' );
define( 'LOGGED_IN_KEY',    '{t`z{%iQGVd9pMAbgG+>718lqu8T:Mfr#?jg|##ki//b(=WDN=7Mk-s%Nw2&-?-d' );
define( 'NONCE_KEY',        '/BFuEZ7[b5eB2:l29!CQ|y$mcHG>hUaB,E!PcxhFg50<l2oGL3ab_SZwfjdo}abg' );
define( 'AUTH_SALT',        'G(J#z 5Y#y= MUeK)99u7k(LJ+@+aR[75Ge2I@vXImAf|4AqWbG2DQwU}A_bvMz ' );
define( 'SECURE_AUTH_SALT', '%L)P(<)CyD^BSsBa.+K_,$>J_G=<!mF5`zJ/hKs[Aox)gozsoIl.p,cUi6kuzSG1' );
define( 'LOGGED_IN_SALT',   '9o-g6oW,U<moS#U}e]>Wi4WBs]GZ5Qu+XUASU%SSRL[n34%o|RQ#3epfgmMg1I!c' );
define( 'NONCE_SALT',       '],Yq8!%LzX[APl<2bEV]N~qN?a{q<+3E,z;x-,=C|:8s4,$qst-V_mn$h|o,E~rA' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'pl_';

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
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
