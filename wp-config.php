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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', 'localhost/phpmyadmin');

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
define('AUTH_KEY',         'Ef8fBbb4>(I,Yi@_.YNWtuPq/7D43~x|}6|vT%D*<>x h!`=A7(mSla/*G3fu>8<');
define('SECURE_AUTH_KEY',  'Ier9P(){hz)]{-qoGhqx1KCC43C}>4Dy8)p5Vd#$D M,Zv6-(GOmN:}rln+BD|>a');
define('LOGGED_IN_KEY',    'SjqP?Q,5oQ$GbbCS`4$Ah2H>B>Dd@/(muwq&aYhL7gV~B7*5@wm~Z[C/d*Oe?XG.');
define('NONCE_KEY',        'T KaxEX.E0FtO.+_:u(E5=IIq$zh4TlOTei0[Vtt<|DxKfp!0C+Twan5j`}hX(P9');
define('AUTH_SALT',        '3~Bqp=.pr)K!w7I6-Oi(pZo!=;92a^R Bm@E(k`$LLGCmO*Ivnw{#8^uu/!#;?fQ');
define('SECURE_AUTH_SALT', ')J$8t&J=l]a_p?ZUO:mx3Ho)d;Sg>+].-#5qq/f;W4f$YojTAIPe/C;W?^^jIfs@');
define('LOGGED_IN_SALT',   'd^ZXsVUc;1v@-CY2%inO.8;mi3roC1_gUlw9>~JQ=hnP@j&6EG3&xf{a5UT1nhGC');
define('NONCE_SALT',       '82: zZ=jGMCeCOjJcHm5KH./s3(b)4m;It`Q4kWFQ{`g($8Z$VQm1?q%}Fv&z@-T');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_web_page';

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
