<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pro_wp_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#zpCQh@UF8A~mZ2D3bpvD`@LFo%i~)mA8h9,Cq>+leKi-+R1:YmxK=pv+n)#-7{{' );
define( 'SECURE_AUTH_KEY',  '`08NR5hbv>N,DK^ p4FNPOt(mbr9@G/=r_5+|1&JA1{.xR;0JDA@+twc|0m=5F+ ' );
define( 'LOGGED_IN_KEY',    'V,gHNi^#p0O<jHP&6IrO3Ptrn#BJO05wUP.0-g<D$F)z{5JwzR]HbMp /p3GaGl(' );
define( 'NONCE_KEY',        'Xj3m%_xk{B(D9Tc6hD :&L/by%vu~,bmJ/RliL|7>T$i~Y>=6m_IN>|zpjMPbWAt' );
define( 'AUTH_SALT',        'FX.ZH_=S@m)XVzpDzCyD7?;1I9lmi9TA{5/@6=*.]fi@/N`*RiNdt1TO=6=;=@cE' );
define( 'SECURE_AUTH_SALT', 'i$kQs2N3m5cQ86eM23]U{roNM&Y0}i_)-;d;VIRV<SFCOdyq+xDH1y>=$aF B2+%' );
define( 'LOGGED_IN_SALT',   '+Wu[}jxhYot=VX}!mm.xoJ!{~ /mc{%2W `bgWau&N{FhV1!PCK>][p`IactI0fI' );
define( 'NONCE_SALT',       '0Q4<#Js&+]-{0u#0!c&hQ8kUDxTHD,AQK<yV53^d&(>|yHA6MzoN*SFah@M:As4.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
