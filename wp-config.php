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
define( 'DB_NAME', 'prtest' );

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
define( 'AUTH_KEY',         '>O:4wA4GodbF~4i2i33su(W+:,UZ^TBC-|~KkMhpY2g*,JB&uC?rSES$H$G;e !(' );
define( 'SECURE_AUTH_KEY',  'iAwj?$f(+5GY}]~*FY}/^?5:qC/`C<vePCBc[0I10GM77-r;:NTT.EJmYSjGep~~' );
define( 'LOGGED_IN_KEY',    '}a]Fc}s[-mpU0mu_-7RKzpvj/>V$$T^6p@#-K6f(dT]Hx:_.Sr<z4=_sWx+u]U5,' );
define( 'NONCE_KEY',        '?h-d~{l/@dSSA3SPjC56`P#v=gW-s]]r5+#>du{shwQhK*hS*P|>CR#Wy(jYOf}p' );
define( 'AUTH_SALT',        'Re1Dcn+eNp(>Xb1VsR1|SjQ*.OM>b$Mj,8sF=wT;AFG?KhcaMxU>]d[AXaKx-yea' );
define( 'SECURE_AUTH_SALT', '6B?|Rk0U/t_<l><X5paN[Df(2QU.=@Y2gyNdKtZC+[Zgla;)a0RN:uZl}pk6AKS2' );
define( 'LOGGED_IN_SALT',   'OW>vIlaGL|*H#Sf_if8gPKX=0M4)Lzx_o-.Ld;]%{4*XwI/txQ#9SitZZ>Re_Fn-' );
define( 'NONCE_SALT',       'f=7^uR41Fq[%b#3hD(/QyF~Dsv|)R**S0O%3y|;l&h4~PU7A-cW6K20ldY|;riCO' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('ALLOW_UNFILTERED_UPLOADS', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
