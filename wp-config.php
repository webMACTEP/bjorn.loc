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
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+

define('AUTH_KEY',         ', TFlK4N|].$cQw:Q84}UUv#N=bL|GP $4&GQT]^mV2&%|lM*#^k6R!|+*ofzj`J');
define('SECURE_AUTH_KEY',  'oWR@(5Ia/mg!0w_sU2I>DFH+mB+G?b5GC+`F3QQlPA6Dc=EV%l3E/8FBU:1KnR,:');
define('LOGGED_IN_KEY',    '_ol.A[:B)kCzo4;<2.)L.s9a|]jbmOim wV8TZ&E0SK^v0mrMwfiWBU}IMM_G`ai');
define('NONCE_KEY',        '5U7G}O`IiAzPjI=z55jI4{GltHto2|(C$KIx/s.afu<<R[M~& hveo?|>MD60dOj');
define('AUTH_SALT',        'nltXJ@#J@0Z+4G_`&nhlnu,VhhESS|95nV7O**L#u9n]gy{;!q>S{jS*8.-@T,#-');
define('SECURE_AUTH_SALT', 'EChu2O%iG2Q{e]pL#_TC;{hoE)vr8snv58uJe[|290h`a6 6So_9_X32Tjl.{(ft');
define('LOGGED_IN_SALT',   'a}%YYZ12+;|[3@MJEOt|r,;*$$P45_%Q=h;P}gQ+N(B9OG)h(ev0N}[p{0EiKEE%');
define('NONCE_SALT',       '`]N63H&m~OH~^GS}@gH F*h|Yq~aj+DK$,y59w#,)Eohg(]4.dreTFF<MX)YPKA;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bjm_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('FORCE_SSL_ADMIN', true);
