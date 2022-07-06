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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_evolve' );

/** MySQL database username */
define( 'DB_USER', 'evolve' );

/** MySQL database password */
define( 'DB_PASSWORD', 'e_volvetest!8!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '1T(r(4QC[3V0ZvH*WWf0o3aVg79*-GcsB7~(61dg|)SFK_m93J_R1*u43~5&P1Y(');
define('SECURE_AUTH_KEY', 'p0jA:MK/fIBgY51v:H;8N[3L6Ng|SS_y+r]43lv@9]:(V5Nl]2R_55y|We12813f');
define('LOGGED_IN_KEY', '4iZuA!26gb|6Nx]/29Mvn1%2bX998tFTVE27:8+3d[*3QY7V%IH6S1G5s54|tOB8');
define('NONCE_KEY', ')M~C[8T33HY5B@bM(Neu)36]69oP4574qM|8Lm8k!48R7|E|U1+93ntn9Rsx(0tZ');
define('AUTH_SALT', '#5AZ#84651m3O/7puLV-f_9Y%]aqRV;Rjg%@7pF4b#3)2HqD5-o!#4_BR0LR@A64');
define('SECURE_AUTH_SALT', '9SOKZ#37am3+yhhC[A5FLh8nFc@xZv-468mpnPa_A8l0@am(;idd7(YH|xbxdIL1');
define('LOGGED_IN_SALT', '4I6;@]z3Y*~+nVujj@|NGN68w5qwCY%I_42bOY1j;*n6%2Jr0:pEpb2TXA:2W9IJ');
define('NONCE_SALT', '+S)lt1Q9z7BAA9d/12Wk@V+o:93+1pbZ@%;~R5f90[&*(1E7@/K5Rjk9]gan7T9;');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'evo_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
