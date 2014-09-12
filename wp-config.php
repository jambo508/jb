<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'james_web');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'aHU7q3r0@lGi.DBN//$5k6X/??a.4]K<8_s2dL43rF[&a75sC[E@t2kT-JSlM0;D');
define('SECURE_AUTH_KEY',  'ZTj!)&E#Y02DG:EEBsE-nz@*J0 vP-Z2/$+B10Tgy&pXXSX}lLTVt:yO?$Sh|]a%');
define('LOGGED_IN_KEY',    '[Fw>dQT[3o|(1^HGt^LN}!gN8RA+ o4>|W*I=O7fR+d|(kO^>yx1rDE/5|vg&aZm');
define('NONCE_KEY',        'LLrI9`Q+|:QUD@M1SD!fucz0!]F~Gej3Aa%MLx4bDt//y|qc+M_]e?1]M$`/iXb+');
define('AUTH_SALT',        'G-!5GjTnYRyf4:zki=>^?#w2-}iWXY(oyF?IKU@Juo~ULU-No%>/k3<]gOg#2>P}');
define('SECURE_AUTH_SALT', 'uP0qPD*UHvB5MND)}V(TP2hEQU2&UaRHailq3XB*Om_+TwKAD+t#qFP!}+6m|*uV');
define('LOGGED_IN_SALT',   'aoeFAQUDHVi(l5v- J-UVu*&.!e|77F*|0#vj*0{KZO95k~?,QT2X<``EbW6rUd=');
define('NONCE_SALT',       '|uM&Rb@}bwiO2I|hNyS)=R:4V|9x1g{~7Mz>W]t)]&DA}3j>-R!/X!M!l.b8mCx~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
