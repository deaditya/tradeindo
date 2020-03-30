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
define( 'DB_NAME', 'tradeindo' );

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
define( 'AUTH_KEY',         '4v#:u_/;YQ@,;rg|]qGlL%nRB1Vu3y$>Ubm6Km7^+?RE4ha65Qg~RQukbJLTrS1%' );
define( 'SECURE_AUTH_KEY',  'GU=k[otADd<<zDUX4SJm)^|A@%,^{9wJT7Y`nM_20(SyaGJbVBFxmjE-b~(nZQo}' );
define( 'LOGGED_IN_KEY',    'Wp};1`JcyPT(L8WxT?sc=:P:u3|%+v$*VR_8uWX>UOM0q(/%vRzq;cW( Iy<rWm5' );
define( 'NONCE_KEY',        'Va}y$ fW~4p3Z?tYI50#XZtIx1R}FoHuO^~JrET[/ui2YKqA+p6l51&fHEA~]s}z' );
define( 'AUTH_SALT',        '#o^q@zm195**5bsrZb*-Ts-v>c*]x3hP,HuKs--NtX)R%mCiyJOdH`{ZM&bc0 u7' );
define( 'SECURE_AUTH_SALT', 'x:4,=^0e[t+>iPI5Vexm+amR-.g:~Df.ft:y]q,giiWzreU{gr#eyd?9QqJZB{$[' );
define( 'LOGGED_IN_SALT',   '+JDT8&t|>0X}6F0HObr_jS`{N$*I*?h)]_DW]0Cae8x+kH|e>{s~hR4:B%+;_rx}' );
define( 'NONCE_SALT',       'Z?+m$1.yX,d6}w5uIaX#}Zq*EEoo!.LXC;Fj+h=#/5X6$+g}?0l!AaUGhL+u>YSw' );

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
