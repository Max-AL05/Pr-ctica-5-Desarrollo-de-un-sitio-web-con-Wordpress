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
define( 'DB_NAME', 'videogamestorebd' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'github' );

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
define( 'AUTH_KEY',         'I!j+AqF][fu>m3qC(]WrPN}4Iz2d@APgLEmLYE9bPy9Y-fOBb~pL,~2hkTx]E,#]' );
define( 'SECURE_AUTH_KEY',  'GL${YjyRhv&C|tZCH h*85#L #O~<4D:]6Q^~!==Ub3]Y<3LjAC[9iodkRQr,G7r' );
define( 'LOGGED_IN_KEY',    '#IO?<$mqL5?E.>t+hqY2L_t%/XS!p{OWISj_.?+U2~5}Q,sukr&>c`7e3Z>%`X~r' );
define( 'NONCE_KEY',        'rPA1x3*`UUrg2K!<Or^pYRQd6B2OMZ;`(so~F![I4^kw K~z!21:G^_|J$RhS.1^' );
define( 'AUTH_SALT',        's~H&muXezC|agjq />X]pSiV5z-?9E6ICNR0(`sW)~LMf4/zz/2#@!benA[`@mQ(' );
define( 'SECURE_AUTH_SALT', '}O!yl%(gv>Bgbqe+agT=Y)|q98O~DZ=JG~4EkWn+e3:%$a;woH]o.+ShB&yiH`;$' );
define( 'LOGGED_IN_SALT',   'Dddp=J!eJC5~.ksG1{}Y(En5 ;9]g5UC8MJcMsrEt]^JNOj&v-lQdeQ8n:b@Cl9>' );
define( 'NONCE_SALT',       'hagDW5~s9W=,T?hj,km}q-Ix`f.dn-d6fH0Gn%+<Y.;%iTPJ1d[L;,5Kyyu,=1ra' );

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
$table_prefix = 'gamedb_';

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
