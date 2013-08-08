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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'wordpresspass');

/** MySQL hostname */
define('DB_HOST', 'localhost:4567');

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
define('AUTH_KEY',         'Rnl|X,4}!:j4i[Hk(0mgoWG!dw*V^-wVpTk0Mm/F|ZLNE;?EmH5^6U2upli{MOir');
define('SECURE_AUTH_KEY',  'Uh{,RjmJv{_EF{/#}|oi-c=Pi~%?FOcv/q;O8[9=q.9NB@h{F CC]9_?|x00a5o1');
define('LOGGED_IN_KEY',    'RGCAj=-Z?{x?wni{8iZvZj-n4$c0QA4s ?8,[e in?}KhR9?[|:3~&/R%Jc/x?/?');
define('NONCE_KEY',        '-6ly>%1l`~gz: -CY;S;iGo-9g^./(gJH:At?:A8!sK_o1`Jm*f::BE.$p5#R:+~');
define('AUTH_SALT',        '-&op-lJ.&qif&-+V1k$oX:byP;b52+q+ph~yD.KbX>Z<?<R~4vH>Re-|{iq_:)Cn');
define('SECURE_AUTH_SALT', '`W%BlL~-V/E2 (qidx3Wh2-VMW@+v&8SbItUZ;x|_8X||1DZ?c9h{DEcUiTQjnDZ');
define('LOGGED_IN_SALT',   '=$-b_F~7=6q>EUFqN-((WwY@FEa2*;%3e`I+BoS6=Gsf_`;xs.w*3Rk)|PPFEh4d');
define('NONCE_SALT',       'xeVkG7|2hO+U.@R<]:h-,ZrQRHqa;U0|77BPPk7R|/<;0,X!uso@L&sK#f(=H_zF');

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
