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
define( 'DB_NAME', 'wp-blog-2019-2' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cdc0243771e2fbd0794b5fe1d2535251bd1e68cb37204b44' );

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
define( 'AUTH_KEY',         'a,T)w:pPb11k@-BQNyRr.Dt3n]OwPO/({ iDdlXWb-rQ%?},&0Z^CN^&}BEf>9Gn' );
define( 'SECURE_AUTH_KEY',  ' /S#.0Mq9T@Sn:%:u3UFl[pIoIzY[2Q6N9BeD!_FBMcz@iS:qL2f~YtrC~LMNu]A' );
define( 'LOGGED_IN_KEY',    'gnjxka}9YhGWgSNTeh4i ;kSC&.e%(64}0/+ZDl+jF_wqfh>34&-w=(Q6)6*+k,E' );
define( 'NONCE_KEY',        'O&Rqg-[BCsO.w$uGN$8[wm`uQn >_`I_TK|3|]d-fGN]cGF;>z=AXOUPN7Ep<fI2' );
define( 'AUTH_SALT',        '`G*|gAG!%WOc$$UuW,W>pir vK^sKe0=m+_`!bVh!AR@xn.Prr*S@s,*9d=XD0PA' );
define( 'SECURE_AUTH_SALT', 'h{^ty&N%WVd)^N8 aOEzw=O=C[HSc?g#BFdAvjiJVn<`erFrxa3K#]zr[GX?dt#i' );
define( 'LOGGED_IN_SALT',   '.HeIj!oYly2Rc1EF9WZGyD&FA493{^Xs`wV={xWumu81h(5Z]{gb6CqgBkwsFVbJ' );
define( 'NONCE_SALT',       'qP&Ey+<:mIA>XgD//MeT),H2U`/OK<[+N:b3[sCJw T^QYZXs$=*:PVXXS)))yv[' );

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
