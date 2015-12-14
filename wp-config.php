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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1234');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '^Oe/YEXhNL0uV>D.%3Yq~,@%Dg53 ~kd1iD)cRrl@R1uL;^l{ta=}=7p.$>-q4G3');
define('SECURE_AUTH_KEY',  '_G}6ZaA0:!m|l@s?}|lsr/r@O3>K-|RbDEKi464ovoGeZAd*]M@54Pc#)~lh<>@l');
define('LOGGED_IN_KEY',    'uNMzk)ULYPlMg,PL*e&b79tHgn7L,zNemz#PKnE|X*rZ*/^]ap>$V5-#bkP0GvWx');
define('NONCE_KEY',        'kP+El@0Q-|64KwnPRl>xbNh/<g%D]cY}TA%u8htE|HTp?]P+wU|W<cY1s9EDIrF5');
define('AUTH_SALT',        'PdM0serx+$w37wCa.UQbe-P3):>eHMtOV5-ueI<#iTX vl5hs[*sS)!1pJZ4n(3*');
define('SECURE_AUTH_SALT', 'Jdl(qdvdl`*e[EYXr7-2mtA,st|f#D/xQ}9aAKt-Q%EbMQZEIm!nC{O] [/lt4Q<');
define('LOGGED_IN_SALT',   'zW)E`{k:-v/sc]=Q%,|O8vF#,-B>s44:HY<+/;3WD-7CJVMPD2+Q||+g~Ki dh7S');
define('NONCE_SALT',       '$qpeHE7?b=!Ka;G9>6g|:M;DUofx%0Q}e$yp3r7brU(QOi(}X3DBe80Mn-oVVqK^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tdh_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
