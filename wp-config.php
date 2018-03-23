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
define('DB_NAME', 'nonbaohiem');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         't>Ns-)Od$UA;//LaPZt}vp*eAhnytBae%X%~vT|kc9y2DBM9E!ON7nxF[(;:?j]a');
define('SECURE_AUTH_KEY',  'y~%S-{`pfz}<`AbP+{NI |cu=n xPESXO}d::A.Fb I[Q;dh`)Jp> XlwQNEM]4r');
define('LOGGED_IN_KEY',    'Do1f)x0QDeA9T!%QY53 {uA_8V:u}8QY$=YKRK;r6bYzmqSs[0.Pewe&qj2peL`7');
define('NONCE_KEY',        '-)~n?iEs`?(`m/E!6;?qAI 8Mej7jX`7A7HIZcyyd`}FRCR2(oqd%x.9E?D%hJMP');
define('AUTH_SALT',        'VyAa?X:IhZwrqvP2*v(L[^SRp<L`C&*@K{%x JgH.A~yIRs}Z=;^`.@L~`&?=.=O');
define('SECURE_AUTH_SALT', ';/qcm${{XvGltFtMjfS``e>wd4QzR$&w9]T{rf2l&g14|I|UQ-+za&u4PP)][!G+');
define('LOGGED_IN_SALT',   'Ac!Cb/!5={jUGr&kU0HjPC*L*Jz7Gkw}!$)<LK|lsY+Xz2FPva$*NldxR7I5Vw&W');
define('NONCE_SALT',       'oA(^Z3ITdr$vgR~92P2O=I^X2CqE7YLq=xjU%/^:xGil*.tnQ}g2=sld)3++mxr ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
