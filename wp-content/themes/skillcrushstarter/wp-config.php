<?php
# Database Configuration
define( 'DB_NAME', 'wp_jmarchwinski' );
define( 'DB_USER', 'jmarchwinski' );
define( 'DB_PASSWORD', 'bAChvyr4OU3tYsbovpHm' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '|OuVBHTGJF-R.A4,LN;/(>T3>?H <:uk0rN;@v6mV$.PeOuyEz9}OjI?D&-yGf.`');
define('SECURE_AUTH_KEY',  'jZ;6s0]4y8=m::`!C0KE C/*|@e!@pONcUfh.3)Y (Ze_xH# QG)i64(VdsT=1Z.');
define('LOGGED_IN_KEY',    'OtyESz<<Cci)?SFe(Awcmienc(0PWT)?DhyIWlQ,!:}Z(y99;]$<|VQt_p<- L1a');
define('NONCE_KEY',        'v3-wKJSX(!z;jSo.$2AV<0#M/?(Zu;+%usQTrm<S?$Au+xH:~JNrIt>n|D<Ni|!7');
define('AUTH_SALT',        '({wO_O.!5*h$Mp$0XdHd+|l)Lu*(IiN~u+M5*7i0Fvr;Y@f|#+LU9S<(*ayZur+y');
define('SECURE_AUTH_SALT', 's`x*epWd-|`d)?$fq%FlFYU=8gL%FdX{jq;+PXf*Q^+!%rw>f7 6y&%vUS]o3vOC');
define('LOGGED_IN_SALT',   'ov5Pz)yMxG)NGoly{;~C5ZZPN8/fqiR3_Rk<Wh--pC7rEaUPBE9e057F#NS[|dw8');
define('NONCE_SALT',       '+O|W[k?1LZts0R1J!oNxyU.:wGjX^%&T9Iz)~E2g1gS+P^i.6+ t+EK9+{]w?w-p');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'jmarchwinski' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '10f6090c6911414f418e1847174bf3c31504b319' );

define( 'WPE_CLUSTER_ID', '101056' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'jmarchwinski.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-101056', );

$wpe_special_ips=array ( 0 => '104.155.167.41', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
