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
define('DB_NAME', 'movfit_'.'horto');

/** MySQL database username */
define('DB_USER', 'movfit_super');

/** MySQL database password */
define('DB_PASSWORD', '$x[lZ$o=]4U]');

/** MySQL hostname */
define('DB_HOST', '192.185.219.125');

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
define('AUTH_KEY',         'LHK>.9I?@{n45p0WBsc46&w`a};.k~jk#pW3Ch/tCUl #cG=ot~C-nR6IK4n3yo+');
define('SECURE_AUTH_KEY',  'E)pay&kLz>P{KS),J**0B;Q.NmkHQMOi ROs?L4nFe]W0%TS$o-naS0xg+:qi]oP');
define('LOGGED_IN_KEY',    '!s7/F+1Cr!)N9m@^YTsvDmSRkXr])0Q8,2$rcm)dLQ/mKFkMecE;8ok/cBi*^@_;');
define('NONCE_KEY',        '!(ukQU3_Wb{@`hU_E1ACX+$?wJ1!t9O9;z*GnTf(Aw!RvMe[2MYL2F)0%N[nb92H');
define('AUTH_SALT',        '3$C~ `AG).(,hJUfDANTArDqkvxm<|OpAC&S25taV0uq69IJAnq:3zpm*q`@p`i%');
define('SECURE_AUTH_SALT', 'bPa)G2C8tNg_p{:l#)B&$fghFk7)t$`zy`t:yUV8KO8L`O()Z.pNyl(81n!,t[zA');
define('LOGGED_IN_SALT',   '%#f}CfJ<5a: iN7RM$f$>(OT{J]&lL*+`V,]Zs|JF;aP{3oJPVymp:wLWr:~LI9:');
define('NONCE_SALT',       's2!$GR@QNyFY7IN(68> {qNX#`=QQ)8W 3<UE2GvD|v*_)HGu^>m]OzCIMlh>q h');

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
