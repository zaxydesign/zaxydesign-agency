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
define( 'DB_NAME', 'zaxydesign-agency_db' );

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
define( 'AUTH_KEY',         'Vi9O`:^1sQE xuSFh+kV|T.J}+,BcY$jljV9W9^bwF4hId1NAd,@cm4;E2F]V*X6' );
define( 'SECURE_AUTH_KEY',  '*!,_vU$egG=6pJtWh`|H:?jgL-Rv]/;^I_idciYOq&$PToOmSbP7+*f#25SG4{nE' );
define( 'LOGGED_IN_KEY',    '<|U>QI6A/;kT<yQp.~4d#5</RG0jhBnxRSgL/{Bb;IMbH5gb^+c~^=N}3;$ TMAk' );
define( 'NONCE_KEY',        'Z%uz{JIQ<e.+w&qhlksvT[DLIb+Kwc/LpovYO!/fiE.b2WVeZwG{u:J[nw|hetK4' );
define( 'AUTH_SALT',        'w(g`hG%/Zo:N4+QJ5FsXaUPT@szIkS=C({w(%LLN!;-v ;CXVEHbtP*!/W<qmSL>' );
define( 'SECURE_AUTH_SALT', '1P%:1SuJi@0Oc|$8Nk?tAOXTQUN?f)IGg#wPd=h86z%aa10:>uri901.B>QxaxH7' );
define( 'LOGGED_IN_SALT',   'n8uMj-X2Ml(b3[hrjK +?Icwf3ejj/&uic*+z79ul{pR1pnVQ=(gh72yeP[#wD8L' );
define( 'NONCE_SALT',       'b?Q.<XJ`Og_U.|l0WwRu)+x1L {7F-4YA`[sze{xfAOt#}ZNM.i[ams E(^w$:jT' );

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
