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
define( 'DB_NAME', 'albertefynbo_dk_db' );

/** MySQL database username */
define( 'DB_USER', 'albertefynbo_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', '1annemette' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql78.unoeuro.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '%V`=8MG#m|DHv>:P7O8:}=i(p2IO`AVf-`1&!Gyux:G0J[r(_-(SN>bld|9Dhy0-');
define('SECURE_AUTH_KEY',  '72N)iQ^0|SEl<h&T5v,QaEYx_4?V<nTBMU[5H^Gl-DK8Qn<28g!+=O<?+.%QCEe ');
define('LOGGED_IN_KEY',    'N&.zL:T18vMM 10nm4$gklCGq`whmrq_7Jt{_2kT=)k HLez;~DMA,kpbz~D:-22');
define('NONCE_KEY',        '[LjFp(-dK#f@PS@-aR6<<!)Q,sQ+U-V#E(GI>w`c*ot8Y>{T6S|5n%/sct.+fh]2');
define('AUTH_SALT',        'Voqv}88W)XwdmI?N>ED~{j*!hKksXLA~N=m/BXU1qCd34k[oeNxD]+nWfE0C4^{l');
define('SECURE_AUTH_SALT', 'fiOL=wUD&|! Yx!CO%+UvTcZ3M19sElCZ@cX>p%qxv83V2WJ#wQb<#}LIRyzfV9_');
define('LOGGED_IN_SALT',   'yC.[Om(LFh=4?vL$D_Wd;$}XFYG2W7u#O+w!c-llR)miKTd/:`?2Q-PXd)qko035');
define('NONCE_SALT',       ')_>r>}f:+Arn+PL!! Jq)Kux)[82B|mtbidp,.gdD5DfG4+jTH|tUB=)z@F~h=hp');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_portfolio_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
