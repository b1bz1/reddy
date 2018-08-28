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
define('DB_NAME', 'reddy');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Ax&O!>&1/imWn@B!JwlYA[`scQ!>}k$8L3^Gxjtu$iWZ4ok&llE*M=C-he)z3+NU');
define('SECURE_AUTH_KEY',  'h?Q(YU$NN:T?3Wu#Wzb{kM{ocke_FQhe#?05?zSdynY^|q8{A{#pVroqJOP_cdKT');
define('LOGGED_IN_KEY',    '_r??7Y9?ttX6UWhcP-adqN|)mjL|QY-zZU{vsH?6G=)s<.+)t5fB!+@ o>3hxl11');
define('NONCE_KEY',        '5mQvL%/O1qB#)$k1^0m-LPp`ajJ488*c:[%I|v;nU;4ha~$]b)snML)VwO[`?++4');
define('AUTH_SALT',        'h4j +Jt@a[@>qtOSlexT,sHx^=3FjwN%=[p_SlcP6`^t=u0$ATN0er,(e<p.;fqQ');
define('SECURE_AUTH_SALT', 'Hkm8{-aJvDq^HZ):&2Uzr%{X?nv/+:Xv~+ZtwSKsfs{|^>8Xi{c.+jzPo, ia <0');
define('LOGGED_IN_SALT',   'Ux{A5TK^S?{$j:mJ.;EU_McGPNpPDMs`wmpy?ca.%+u8-)?[_{^SRBMw)x% BSz8');
define('NONCE_SALT',       '.O^hh+Za&:S3V%hR?FOx-qIg!7OJTtK)Hc!A.r?|z0@*iV`v0FeRt;*%$oA3owDn');

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
