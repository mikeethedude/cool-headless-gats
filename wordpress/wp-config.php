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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'database');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'QfT,$tk>HLMr@~]i8y+~dJU]Jt8P[r}HUo[)!}vVZq gGkcQ#JSzfMPE#=(/`wdt');
define('SECURE_AUTH_KEY',  'Sm?t]M]+3l}Ej6v0+ciA-pH|Z_b#9J|6.pMN~YI}&Eis|S>(4jsF/N r)]oQgRPf');
define('LOGGED_IN_KEY',    '!HWSqCl,kGc%oG9k#|F+1hu/WV`:|wH;&gQz(1/]k^mCs2-Vawl5*h4ni/Qm`b!:');
define('NONCE_KEY',        'XU+Zc9 (GI-JC+]V5[0]4shvVtxcbim?xNqo 3DyA }$VCN;DJCk>8cdVFS!wyqn');
define('AUTH_SALT',        'ldHa{[jeSC=?%Cybbv&Whp@MoOQS4VES#*MDtE(M!`UmL.{}U*#UfXq5Pc+62xVA');
define('SECURE_AUTH_SALT', 'Xu6O*4&w{#$8siF-``o=?-7!]ExHbHRGt@6nu*>.t%opaSD1D +[LBwu#+8/5f*v');
define('LOGGED_IN_SALT',   'pJq4mNKN!MbQ#5p}/-KKiu`0+!PQ;fr!yN@C%Npr$b#m}%&[FpT. <X5?8+9vMSs');
define('NONCE_SALT',       'J*rX,?M>+3h,4(vHquBr8>4kk2<CZIt`7DN5FBCEx<%Q?H=E?]g.dOs|Mx|joqr,');

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
