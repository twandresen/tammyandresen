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
define('DB_NAME', 'wordpress-db');

/** MySQL database username */
define('DB_USER', 'wordpress-user');

/** MySQL database password */
define('DB_PASSWORD', 'webit');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'M:ZhYo!g0)XbZ[<7a]d}>#EAR>tACBvQ[WY-gZ%N`6ZwN!?*tXM5nEg=7V)8BW17');
define('SECURE_AUTH_KEY',  '::o-_V6u[L^RfI54?qmzX/.t Rl28;XdQQkxTQr%JoUy:4/1pNShh5eK}^t6uxC-');
define('LOGGED_IN_KEY',    'ngA=)MA?kGxZg-o+rL|OO2PmSF-!o}EN$AVy>Y,V*_d<@Pff-v>f8*S<mL?xl-+x');
define('NONCE_KEY',        '2|_w*EVi30OdVFB$DLaoxwnrjxQgH9FV]4^$wNc-|]H}^IaI^(Dh!v+(fv)X(Z%x');
define('AUTH_SALT',        ';c8kF??<Wrb zU^ zt17CrU36QUiydE3!1!ET2`Sb/.vM1qtlPcBqq*-{}-G4Xfc');
define('SECURE_AUTH_SALT', 'z7<D+x|D>0ii)-m_q(9,PGbI@jQ_y,z(ij*8& v<Ov[y>Jg,h= _N12_s#*R?5;_');
define('LOGGED_IN_SALT',   '56|Rm,/2wy3k]A}_BZo|AA<sL?+6H,}RV)2knXeMUA96UV4s<7M;+tFX9]EL*v#b');
define('NONCE_SALT',       'yRfZN@ AchZhe. E(twv<66=]2{;A-MJ@N3g_{q:ns6(PK**1p)MBkP?<Ny)kSZu');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
