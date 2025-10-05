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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'f`fiTTK}%L0l3)Yr#Hl+*d5f4Yf[(QaTx0[%l*^ab?{AL~7jD!gz_sE#ebuIodf+' );
define( 'SECURE_AUTH_KEY',  ')p:E);.rKJo=%crH%gGa+y-?&SrX;/s[-.ajJ@QTwmd<g0IiMHVivea$@|Fw@F+&' );
define( 'LOGGED_IN_KEY',    'dC~+Iwl$E$1dsq7uf|[=VSWh(&<_s()OM [P,;Y/{zjmU^0fJpfRkViKeW!BRiBu' );
define( 'NONCE_KEY',        '(cmOAA<d!#OcZTqX-4fU}(/^fF+Eq<=]<te5rqVI7cO;K0m;a>a&Y}$s?;ACX%;1' );
define( 'AUTH_SALT',        '^7RHs0*K-A.4?]@fqYvY-VA!D.4L7{tC q;m@CN+&2+J+-A$Ddsg1o+>&kMZ)uf.' );
define( 'SECURE_AUTH_SALT', '-ndQPNiXJfUku.[rusEJ:ZRWN8ZcGm_B ?4laxpYr_Q~DFGQJ=BVyq:Z>V$nOa_2' );
define( 'LOGGED_IN_SALT',   '^gpnV#UO4~_Pi5*}d?Ln{1?cW:vwx!Xlr08TTx  ?/HCQB>,7ORS$D6_)![rU5FQ' );
define( 'NONCE_SALT',       'cw}B1O+}0ftCmo*6dg<vmevj?-Cqp1co7K3!Ejt wh0W}^G0mh7FkK3N>X#7w/%U' );

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
