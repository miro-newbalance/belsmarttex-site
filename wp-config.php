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
define( 'DB_NAME', 'belsmarttex' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-5.7' );

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
define( 'AUTH_KEY',         '5)WT6X!>e]|@X|Qp$kPRJt8^>!Juiv]:>GY;&y:wB~1!J]0*|=ig@$lE~R~.b%&1' );
define( 'SECURE_AUTH_KEY',  '3IRt6tST(Y:StAAqZ8MxT-6]wOdtAvZhl*4X7%JHf6_rM#WnbDHj?bQ.CdC|0}8[' );
define( 'LOGGED_IN_KEY',    'n!Ur DS$`mJ>3U_-E>R^yVyU**3d^k5-&P!@moB1OisR }V%+IU2I5gRaI3?<3y8' );
define( 'NONCE_KEY',        '~E^22Es3q1,*WjXEIGuxx3#.JaQi}.ea?58(YJ%>reaE5dqXyf|.1k,-Yl:%Tn@M' );
define( 'AUTH_SALT',        'GHM~TwLz}E_%KXK+fG}|*Bk,P2/{>tbMNiPu/S&ju6LE{3VB9.H; _x58;&P1qp)' );
define( 'SECURE_AUTH_SALT', 'Vnb+!UUUTGkUm1JvGqk]m$)yVU{t-0OkXpiBp d)S3*GZYCPSbSBsB]Y1+$EICC*' );
define( 'LOGGED_IN_SALT',   '9n/FOqRX}lo|:L6,FfXMD:mp0F4#oH&]+,==9@ZYK;9N8#(Trut?s/ai79g)=2@S' );
define( 'NONCE_SALT',       'R&Gtx+j`oB;l&[VR?8wZVBGXRNf}f`U4z+ZZ4*#d6*srGnKus4uAYULQ5i>klDIX' );

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
