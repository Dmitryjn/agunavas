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
define( 'DB_NAME', 'agunavas' );

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
define( 'AUTH_KEY',         'qt3n_N&lOp7%Ve7AN|{vj|F0T>;Kug;6kUhCf2=CPA%Hr$[Xp]MRv(AAvJNke3H~' );
define( 'SECURE_AUTH_KEY',  '4F[^e,2W`n+1-&7_KY`% @}FurM[%IY0SY@f3wofB1)#DO#V7|<u93Haff5d8%8S' );
define( 'LOGGED_IN_KEY',    'b#2nho6~)no~7BVSA>:5qA97L*__rQd]heEsQ-=P]!tQ*8r;*5R]*-jr>Oh%boEz' );
define( 'NONCE_KEY',        'qQC+[yaVUSF>Lkz[0^q0<{nl@ZU#;.IKa|N*]o4,(WYBPO/bC|QTzydW&_^DM%5h' );
define( 'AUTH_SALT',        'Nu`fc*Mn-]4&!oFW }63ZmXvx<44kp|BKJ<7:X]w[iAZQi~+9X`m5hSh99QKT,p<' );
define( 'SECURE_AUTH_SALT', '{X3vzL*@LkB!pz7p+D2GD.fCNq[4+;mj)|)tF-st-sz&Fd$FgB+(KP.e*dVcK[ko' );
define( 'LOGGED_IN_SALT',   'JU(F:`O+IKgm*LmW_yq8;ub)@d`&VM+{4(sDLRl@Y<BsTIO[ALoprfxJtz>N$I1T' );
define( 'NONCE_SALT',       'l_xw]%t7WFq@f>;e?I@eS<ApLX@]Iimk)J#e@XZ:90VJCOfbS,m{9P7q_Wc#;`!.' );

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
