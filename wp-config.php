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
define( 'DB_NAME', 'chanachines' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'db665c405e10a72408332f508932ad6e8c70a01f409a0706' );

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
define( 'AUTH_KEY',         '5#Su!O~+[6nR=#&=Hi~$W0+El?wJ8RLRboygqJf;/;=%GnGtri/N?,g?J`7[X>W<' );
define( 'SECURE_AUTH_KEY',  'f&.`U[sL9)`&?Zwpsm>CJ|1.MbP?.e-o*Q-*pXI$%@t$lUyvBEl;bka*LR%{.EF&' );
define( 'LOGGED_IN_KEY',    '4^]SUt4AYu7:pl.g$LUAO[16)?)7@Pfm#+7W[=q+X*J!*{UTRF8Gu9A lne-7gG}' );
define( 'NONCE_KEY',        '&@$C4zO]EsS-Jd$gPO/tqkB84;5fu:(+hR&E@KRCeYqx8(Us.kuZ{q6T&_j{hlu}' );
define( 'AUTH_SALT',        'fi>yNy_3Gu}E).Nw5KyI%n:]$Y;{u6-8h[AkF~ UTp9g?>Q/7V1zQhqme[DB-/;J' );
define( 'SECURE_AUTH_SALT', 'i*:6#{_u91{}I s5Ll}` (Q>YP:c}a*tpYBO_gq$uTYxImSFA*/dex#uIBO0xA]`' );
define( 'LOGGED_IN_SALT',   '@(vMEYLd:](kkx*}~}7/q+,^!mpBtj2pg:~g|U>Hc6?&rrlgu<?0!U]+tvfXnfsU' );
define( 'NONCE_SALT',       'A84.VsI3|@?;uaB=4Z&|J,|yTcd&~WDOHv)s{az)?MIV8ev4O01:I~C>d)#1J5;o' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
