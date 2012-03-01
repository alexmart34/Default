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
define('DB_NAME', 'jcsroof');

/** MySQL database username */
define('DB_USER', 'jcsroof');

/** MySQL database password */
define('DB_PASSWORD', 'Her3691');

/** MySQL hostname */
define('DB_HOST', 'jcsroof.db.6470977.hostedresource.com');

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
define('AUTH_KEY',         '_/z&`NlORC!=nNJu|ro?[`KmmAI?zIb*]Jm>P94G@NxqpZ8MOaJ#lr_!Y=T8D}$2');
define('SECURE_AUTH_KEY',  'm.q^l/gvVt6]3D#s7-wP[8D[iNasj9K.g#c%G`CIKkJ-2CgffN~|gARsGo7d,G_i');
define('LOGGED_IN_KEY',    'gO]a1#;-Xhk!:2CI$+N+{r(S3,dBy~osdOxPF(%kW+Cc3VHhWdfB~o>_[1?4HD48');
define('NONCE_KEY',        'rT3MmGg43z]3K,XJtVcczQ9JUHK#+>P~=UKRYx~Xq]cAr>;w}VD!+Hb{/-TZgL9F');
define('AUTH_SALT',        'tK;wE#@}s?JER,!8_?C_Pr3IO:U3y9K+}JSS~`Y$n`|`*Es?K5u{zJ9hW6G&+K&?');
define('SECURE_AUTH_SALT', ']Pg#TN5kRgQ9;<q4X{#n0yr({5&^E8b((&5j&vI.V8]?tFdUWy.I~KX>au-~5_t,');
define('LOGGED_IN_SALT',   ',WMUL{4uN+gj_KY)gg*(3z~N-`Ed =Y!:BGkZ(2bOX5DB/bw81~;}sl#{?J^@2b%');
define('NONCE_SALT',       '71OXYmZ+F(^-Fote(gk8P=ooysm@ctK2Pe[9P =XS-uG.aXO5c.WT+?%un}nH1/0');

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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

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
