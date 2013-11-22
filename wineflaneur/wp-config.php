<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
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
define('DB_NAME', 'wordpress_5');

/** MySQL database username */
define('DB_USER', 'wordpress_7');

/** MySQL database password */
define('DB_PASSWORD', 'gVsB$4rN17');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Vn3A53JqUr$t3MKa4zV$3i3#pY38cFwT$HhKTTzSG)QxD3&G(VV41&%zA*eJ8rbP');
define('SECURE_AUTH_KEY',  '4CwFrv%NJT78IRKe$bJdSNK*fdyO@pCVDbOmrNQGNDLe6!v7VzDAII^2wxIURE9G');
define('LOGGED_IN_KEY',    'vCncg)a6u3l!^aYN3pZY)3z(7V0oDx)io#&$R2YD82AdsP#^!Z!TKxK98gbJUE!z');
define('NONCE_KEY',        'QezebXySHNcR!qBnp%kd%S1TzxUKSxW5Sz*8P105ozz^VorX$4&$$Yk2uJ%%%gOX');
define('AUTH_SALT',        'or4S12&7J7n147xEMcy5EF5z0jUE!XoEJZMyh3&kUn$NBW5f@IQlsL0TJSFAJrQY');
define('SECURE_AUTH_SALT', 'uRyiqhXfbdtBx)F$IXTHab3HBX*k9rVt*NdLtITvzwRujXSs9FNEl5*u3EX%2GfY');
define('LOGGED_IN_SALT',   'andUHhXLReyautU4GY0g2cVRT0*N*S&zKvfAeJLloeGNs7O6)(aMTsGgM@^nS5O9');
define('NONCE_SALT',       'VEpXfKdH8j)z^kRXCL6%%QUTx%M(XvZaRla#hf%CrW1wwFA#Roy82wbwOfO^GA7n');
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
define ('WPLANG', 'en_US');

define ('FS_METHOD', 'direct');

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

?>
