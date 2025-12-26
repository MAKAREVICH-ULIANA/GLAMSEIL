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
define( 'DB_NAME', 'GLAMSEIL' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-8.4' );

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
define( 'AUTH_KEY',         'rNzk&[$54[(Z]gME--PVB7zM_4?;Qqp?eR&8l*ZwUw[R7*JS.)d AQ*B1:sTh=2|' );
define( 'SECURE_AUTH_KEY',  'mmiPeZ;q:LHh6u`yW!N1yxP4 Y}FWg12Lr!DY~Z_>Q.Pn%Vw72!MO !ie,0r.|OI' );
define( 'LOGGED_IN_KEY',    '5Ox**BF k9BO&|*uFxU:|];}5E!0Ij>B>=P#K-NCWN0i[~gct2?4bIU.%%D(<f3q' );
define( 'NONCE_KEY',        'RN},<@rZd1FzG:vt#[VzxWuZI}giHl/iN)cr|Y!oq;U3[e./[[C19#)0LJ`g]5)k' );
define( 'AUTH_SALT',        'mstF,U8cN>=! )!Xo@ivY}v?$xYE>F6@Iic~|i03yMz1oRVo@Z{ L^DR$^!OA-hE' );
define( 'SECURE_AUTH_SALT', 'j/d#.kf`{gz,s| F[1HpS(jK6UtffL#q[]ml7a)jd;x]u.p{-MI.H$sN(+21CH&2' );
define( 'LOGGED_IN_SALT',   '2}-Dz:ZEo3q4/E*Ul,f]XVEJ$uy~K:!HFf*:1XSgA3.e?02ha^C|9g6Fq=T4s+!C' );
define( 'NONCE_SALT',       'kdHz,P<VD|:k|riM<X&Q!Zg85X3iEe+e$p>KdjM/7FKlvUjXBetU^tbJS@n#,rBO' );

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
