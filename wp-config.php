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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'D+w4Q<@L+%87m&c_P6~5V$P&=03Rdec`xiFsX_yNyvkOmU|F`A-E4_bbVs:&ck~s' );
define( 'SECURE_AUTH_KEY',  'GE[|U4U^gJLZ#Q=c|l<NG0 M?`gV[`L;.;?m +bO4UMBFIxZPpCg&V+i:~{PqJ+*' );
define( 'LOGGED_IN_KEY',    'v19IjB?9s$4Wc]Az->[>M5+rVeX)U;/zUE8H{HA`&u`(yfu[)f|_: 83Ge^OLL]v' );
define( 'NONCE_KEY',        'W`5J]jcsHY2u:ysjt?IGIZBfQ[EMbD.o_p=(@,7_ZR,L<-m~>H5&wa9d*nSKTwDx' );
define( 'AUTH_SALT',        'tdZ0<*~4`s>v|{Q}g>W1}3bJYcx}Nq7}WR|*g1eR1*![e]2CWSkj+TtbvY&F+EH,' );
define( 'SECURE_AUTH_SALT', '?td^s3U5D#0S10K?bms#Q7e)cNR9b~z9.Ytl (!y.4P~=~n=J5jXv#;O1:MX!NCn' );
define( 'LOGGED_IN_SALT',   'iSQLOm@M&b5ZxQnJJz*%)Rjl}|8DlG@0,LS%CIJWPnWV[ryOT$GsG{d]Fsn3]I 8' );
define( 'NONCE_SALT',       'youE--KI^*6Z Py:(0YRYf94W][]o|<k,JLdR45_PRo{m=-Q(5lzP:+&t;k4Ru}m' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
