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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Xuacewuf41' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'D:^DG[Y?=|a6O9a0F1usJNO?rjiwrf3il:4Qg<+*vT9?D1bF#9pvUzYI=U6n}=~m' );
define( 'SECURE_AUTH_KEY',  '}5nm6WkyRth8;T7#$#ZXpD<PCH#QV&<B+>@jHTC9fv6&0n%qk81AZh>0[].Nqt{@' );
define( 'LOGGED_IN_KEY',    'JvI<@u`b7sHve/RyTsEBo&Ug>/,eJESHE4:]4a,5,}V1v+L+1W`Mme2JKh]wrITm' );
define( 'NONCE_KEY',        'cVK6tp}rCnQl{-s^ xFnV5V.n#5(t< Cn%iQ52|(SR6I]Jo!XfXNxZc<}IotH&U!' );
define( 'AUTH_SALT',        '}Zw%l[p<VF%$o$>7K5}-~,W-`EoZz-aIsf4M?J5y:4VgMO)`f]w#74C+_3]Xj0uX' );
define( 'SECURE_AUTH_SALT', 'cqHeS4zM&@<[k2kq2qHDKj(_5.p x[3s8!ymHv_%$Y4{em@(*lbWoU5A<v;WVYRA' );
define( 'LOGGED_IN_SALT',   'EO,[&X=75ct-+)sB^h]M2#D>/Zj3iMl&{zw;*<k)m0Msm]9Xn|Vo=8O9S_T6PcEF' );
define( 'NONCE_SALT',       '+s~ebg)$d%wD8{Xex9jTm|p]Rs$DO]CT? TFfHGUXQ+i;UqoV(p$8_ frD!hrh)~' );

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
