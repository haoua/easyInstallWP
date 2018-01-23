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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpquatre' );

/** MySQL database username */
define( 'DB_USER', 'quatre' );

/** MySQL database password */
define( 'DB_PASSWORD', '0000' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'Z<?CqaeZ&m{j 0Piw_f@zjy7hbZk~@&yM+YP*E;pD^A3G1&QG>LtT1}&ItS0wkJr' );
define( 'SECURE_AUTH_KEY',  'b[_FrpI(CHh2T9LvF6~`/88~R8YP;ctYbO<J5t@5[;{B$;wo0]l&F2x)& (fr-;W' );
define( 'LOGGED_IN_KEY',    '1#8$]&BC;I)F/!-i3uWq2.[}{KQM(1zF]Dds^+M.|n<lcs|J_@2%FG;BcL2I?_M1' );
define( 'NONCE_KEY',        'o`/v[KF>j76%n8j];;&Hb=aZfh-WTTf[eKpx27Xz-EprFY^Z%~LdJ#2C}0=>QUlL' );
define( 'AUTH_SALT',        'M{<-/(xnbSf$<AY=.MIO92)nAb]e:`:l1_/Z qJ2X)I_ME6Z?s0M9A#HidUpD9kT' );
define( 'SECURE_AUTH_SALT', '6DpC[$lrt` #Rei%+;5TPgA&i^_xl0T~21u<`gl3>fpS[]b05k&Y}hWW;5_ SLtc' );
define( 'LOGGED_IN_SALT',   'A2d_mge/e,+a|cEu>O$W:N{;BG#A8^)Q1YgZRL&Gds=KOF|4tp4S{;H!.{xBG6#4' );
define( 'NONCE_SALT',       '<F6yXmJ~QTiv-&&SH15HdlCRJ!NKu0o(zb]lJ)C/uIk=C2olb2*4xr+,5t#vH^=&' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
