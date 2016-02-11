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

define('WP_REDIS_HOST', 'wordpress1.yeoxuz.0001.euw1.cache.amazonaws.com');
define('WP_HOME','http://wordpress-1213985990.eu-west-1.elb.amazonaws.com');
define('WP_SITEURL','http://wordpress-1213985990.eu-west-1.elb.amazonaws.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'wordpress.cqxvnvolffjp.eu-west-1.rds.amazonaws.com');

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
define('AUTH_KEY',         'e%p1jTkHXP]?q5yB-vt6{<KeblCm-khSJ.M-gNuLhVz/zFy2CF(mgWqGop~yh Z ');
define('SECURE_AUTH_KEY',  '|r0 /+fukAa+P}AX~#ELm)5l1mG+y||eoN!0(J6/b=2(VW`CTlJrndx[o]dZMt x');
define('LOGGED_IN_KEY',    '.a Pa|A?/52&D?WE$7gf|y+#-}ri^C&VBUc$m{K=m#hfpxVYPm0 .I?>E]s3C$v_');
define('NONCE_KEY',        '$iZ,+5dpsA9=cs%BA#-x tI&|n0~y_082*sPdO*u0e+>@O*zZtY~il<);tL_?R?n');
define('AUTH_SALT',        '=B6f2Hl,!&H,]PmYN%mPU=O/n6aJgb=|[,.uY?1C6bU(&idJ(Q11NMHApZg-t>SZ');
define('SECURE_AUTH_SALT', '<Z[!~As|*:Pn}~+0JWqH||$w{t&Zu F -!m1<?)vE&Ztt:]M6;+9$U=;=}O|V=`t');
define('LOGGED_IN_SALT',   'INHr.FvHjv>VnxS|2Y`ZUxc/f-[T,Sk|:]Vs/Nq*m3X]YQ;_8+f8fg`7Pd{t|+(|');
define('NONCE_SALT',       '`vOZ@YDLY&oALkQ8o=,b|r!h,:Tf!1^88w-&0-e.sIHVMPc-f)!&=8C/fZpv7 k_');

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
