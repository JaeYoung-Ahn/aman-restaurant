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
define( 'DB_NAME', 'aman' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'Eu^BO~J5XUhEc1B7|ZzkMzn~MRjr,{jUuKs,7vhW;3hwhM%=24-3+$d,V`$Cz4|b');
define('SECURE_AUTH_KEY',  'nKo+?~=Ovj+v8+IaFKd0<QNi9#6/qGByVS%,+a-~?T/)BmH+U`,&SkU76`.k1V5f');
define('LOGGED_IN_KEY',    'w|.<5F_T@OdS;p@X.wEFUlEMoEf|tr{*PC^+ T-0W!iSy2@<|d}McgK5%bOI??Ac');
define('NONCE_KEY',        'U[5A|+@}:]AlbHAWxEk+ysp/?RF80J/*4Q{Q_]~v};4n1j=u%D7[4|5#ooLWar|:');
define('AUTH_SALT',        'VhyXv.Jb-w{>0EN3$0/)T7S-? p+St$o<l.YN8Gkml}o%TI~r;NqF~#qJO|xIg.=');
define('SECURE_AUTH_SALT', 'h&YL+9s{!>W}%D+evbr[D*Jrp+5Rkp7J{2,,9-?Y~^pP~U}-d^_`hKwah,<>mV[Z');
define('LOGGED_IN_SALT',   '-5Jr.b|I.C:%f&[&F.vRYvj@=TN0U PlOo0BDg?`r|Mw-.&5R_ChWb-TY nx|KzA');
define('NONCE_SALT',       '{{N1.joV}).lV!Xj(j_*R925yGCIp8Vu!gVHvNLNvR-]yJ,Hw!QOtq-?QC:5o{&j');

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
