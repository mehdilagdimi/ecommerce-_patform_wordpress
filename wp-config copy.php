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
define( 'DB_NAME', 'wrdpress_ecommerce' );

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
define( 'AUTH_KEY',         'R65GOx$OhH+Oyb5+>dEC6.Xv@@ S.KJIA35=&dByr>k[KYuZu9Si5AlJAVU#3_t6' );
define( 'SECURE_AUTH_KEY',  'b5oAeCx,*C7_C0ZB|kGqO&&%D+/UGw*K.}2[jF$NfaSBj<wx_2Qnw&d{+SD[[% y' );
define( 'LOGGED_IN_KEY',    ';i(v/P)se{o>m,L_#od;v_y:W>F7s}I]Eu($|~:D_g/1oN?fI7#kD8Qcn&CrQnep' );
define( 'NONCE_KEY',        'Wj7nH4@kC)cJpaWt9%eSViu&c1U}.||P4$.Qc?aO0P)]xJAp[rq-fVb@ld{9B]&1' );
define( 'AUTH_SALT',        '432xv$bxD)JCAXpxT{b_I3b$cBz=jJm]M;iOK4BH.PyuNW4~fv{0..[8=:81S;x]' );
define( 'SECURE_AUTH_SALT', 'V hJ|?z@%lu_K{p0+u%H5~*4T{d8ev5;1_jCU!;6)2<;nrZPM8q8-$^f7wK#`vIk' );
define( 'LOGGED_IN_SALT',   'D,o1]dmOU{}ZrR<4PirQoWS=S5&,Kq]qWu:{Ki*dpE/~pO/Q=VZ;}v9_5&We]z/2' );
define( 'NONCE_SALT',       'f_@:umC)*X=+znOQJ.X{7U_V8(U/|@DIT[Ev8n?UQNS%qC4PI;r27ryfB4+`2{3p' );

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
