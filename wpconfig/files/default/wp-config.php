<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('WP_REDIS_HOST', 'wordpress.rzdse4.0001.euw1.cache.amazonaws.com');
define('WP_HOME','http://wordpress-313675101.eu-west-1.elb.amazonaws.com');
define('WP_SITEURL','http://wordpress-313675101.eu-west-1.elb.amazonaws.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'wordpress.cwiaznlur05p.eu-west-1.rds.amazonaws.com');

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
define('AUTH_KEY',         'vN,sV!e|[eX_W0@QGrRJj!Pgh[%Rs=~+ t d:Q/0kzmzv+MC;N&LQSkk*<#6|Y%}');
define('SECURE_AUTH_KEY',  'WM:;^D7LWxA(km~C[z|KS!%s;K|6rvz:Tr^}>|URMH|-_sjicbY!lQIW(&bg7hzL');
define('LOGGED_IN_KEY',    'MaR0vRh?&~AwGA8DrKc*MI:nX5)h@dI4qr3vBUhMnYb^2Acb+NcPa-uakrv8^Lbl');
define('NONCE_KEY',        'Y1JtL_gk=z.%gKdwR.(h0h~Hc^BpWuGd72?m.Mre|-BxeBGt$<+IdXGLWH~f-ZMe');
define('AUTH_SALT',        '~FIOlO{eetW<W7~]:S4<2dJrw8hYz-Ld9,F6I]At:-e|cC{}aXOk|bxu~#3ck1L,');
define('SECURE_AUTH_SALT', 'j{9+w8#ZKbn-!noB--z@ k`-D,=aVeXV%-,;0*-W,X/|c0m)W!zpjs/6YTJldF E');
define('LOGGED_IN_SALT',   'lX)U=W-z=|H$Ead:0VM)Tt[D:fdu<-noLD`,JKX;7Zp@Z(Xr# .|n&+s%|tB6A6]');
define('NONCE_SALT',       '6DCfN20{^/E&f@`Y~8^uEK~_8)+SalQGM67nC3$5W]quSS`@i!Y;+mdspLS*HD/_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
