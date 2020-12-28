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
define( 'DB_NAME', 'wp-bookswap1' );

/** MySQL database username */
define( 'DB_USER', 'wp-bookswap1' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '10.0.0.34' );

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
define( 'AUTH_KEY',         'L/;F(1z`?,Q.V?<464YN3[4THW7#n=kiJIB/.W~y4gDi}aO.n|.*B#HNdJAQCYgp' );
define( 'SECURE_AUTH_KEY',  '>ZtA]Vo|ncBm)lD_(Ns#rNT]uUlJfM01CJMz}izCW:A5p=evw&Q59!ch-;w4j`lZ' );
define( 'LOGGED_IN_KEY',    'z[gtEUZP>7m_p5B/f8_Ts]99)wO(KFu_w3&I&LM2,{`I)j+yZp;.&PBPmGZtt:&c' );
define( 'NONCE_KEY',        'N.-yWxgfX8I0{k>*}V_e]tQVLWM{W$4N+~Mt:~<5U?~SFvhfqsuF]P!0cGc4alC:' );
define( 'AUTH_SALT',        'yPz.Ed:p>MT3QQgC~mUGHSxWE8FnQM^t{>`_lP+,)x}QNl_(iEc{vpXa9%f>%bS>' );
define( 'SECURE_AUTH_SALT', 'B1C-b&wCcOr#f([3SvPTKW}NGDH^|Jzjq`h,*/q$xlT#a<Mw^<[+A.JLb ^wlL e' );
define( 'LOGGED_IN_SALT',   'ww`)[p.|wPA4_^umG&%n>Zoq*V(&bmt?P/FAyc~HcYV/Ky.S ;$[QbX~vxux&C1#' );
define( 'NONCE_SALT',       '+|/%WDcs(xc)jdPhF5;CO=q^bUL*5l9RWe:PAD;2l0e +.y5p;%>w~,qf`z W2fX' );

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
