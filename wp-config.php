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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '(+:4FMuJ:)wS7(2:yR?#GH1rWs.b@o& %KE85+U]<Ds_H+~qzfm-lyd>N6+fhYqc' );
define( 'SECURE_AUTH_KEY',  'Rhf/~_=:g/SF+(fG*$JGVX#3%T|`~0/frjZG+Md[TgF3YlWalm^UYI=Ub-dQ5YM{' );
define( 'LOGGED_IN_KEY',    'e>k*]J|>rK7(3Q[-D8qPVe>)(iB~+mKWLkDV-1Y<+GMmrgAVKAap*VA=`<!z_7%D' );
define( 'NONCE_KEY',        'PlBf,ajFyb#YPIpgq};VuF1cFlsz|Jv2]c={_Jqm9NrPMm$9*(8BJ3v_dXa,;mW=' );
define( 'AUTH_SALT',        'Qf[Ui_Q-lJr#toLwf]49`<UP>)?y0(m@s%8voCS~q&i=H?@aQp)#X{kb1%!bS2kg' );
define( 'SECURE_AUTH_SALT', 'Ro0z|Fz$A?vQitcmjCv`dE?_iXLnYI{q)G5 3(*H()Un`5YS>%8w2!]>~>NhkA+ ' );
define( 'LOGGED_IN_SALT',   '7t~i`<@G? U=LP5?/.d<`9I;2>2u}W<$&2e!iJr#(/9):u(w]oK$a#6$T6IW?]vH' );
define( 'NONCE_SALT',       'NTT*(D,Kw_;pwG:}D8}Z-SqWwsw2*=;;aH]/%? 9Pd~-+Y[yiYe&wuzoiX<7tp3G' );

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
