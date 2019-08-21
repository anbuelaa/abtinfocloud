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
define('DB_NAME', 'wordpress_6');

/** MySQL database username */
define('DB_USER', 'admin_wordpres_b');

/** MySQL database password */
define('DB_PASSWORD', '4Wu5fV!e0Q');

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
define('AUTH_KEY',         'T)i&voOZpFFv4L2XBcv0nHE8HadauTK!cSPyXsRvQTZu4eqRB5mw9W8rXnUJ8htQ');
define('SECURE_AUTH_KEY',  '8$WxU(IhSFelrIoJ9g*fHfvvlh1tBxEX5K)8DB#vnG9ati@JAPv@dRneYAdv8KTC');
define('LOGGED_IN_KEY',    'vUDCPKPz25H)FdsGvN7gtF@rQY$*&G8sucY&SQ)qwjqB4U^R@5W!)nuIzm0z4bt^');
define('NONCE_KEY',        'H(EKk2#N3vYqVZQSYE!h(I&EhmatJvY#fnY65aaA!$2W)NJg4RTBAAz#W!ggBuug');
define('AUTH_SALT',        'HgurXHZ7)2nc@5B!QQT(z2ZyrQnCNuOj%iVhOOP^Kmur9ENe%sSEIrRFq&Ijf8y9');
define('SECURE_AUTH_SALT', 'C^2t#7(zew)&NDi*VJTn(GtAk%hA5$1PJTMb70e&25RQB5RiU^8kk@BjrviBwm6z');
define('LOGGED_IN_SALT',   'Tdfe7F2pv7K8ldHD2q3d1ZlA5umn*)wxG!z5qYf2@p&TE&S@cZ(o7TxoB6EJfKa)');
define('NONCE_SALT',       'Aa^t@&ysthL2PzZLx!a5D*@bNxIS4JGgndaPT#yDZA)vMMjUvep8koLT&B5@5fOP');
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

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );



?>
