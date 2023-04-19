<?php
define('DB_NAME', 'wordpress');
define('DB_USER', 'phiolive');
define('DB_PASSWORD', 'senha1');
define('DB_HOST', 'mariadb');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

$table_prefix = 'wp_';

define('AUTH_KEY',         'S*0<XwBt|DFCP 6;-T4/P>=vjC>y?Pxx7pv{R1d8iM[v1I*@7[7E0N,{z2etk?Cy');
define('SECURE_AUTH_KEY',  '(+]RgX!<pT[!c]8&kwi]Ph4e,[5eP#EUo;?n;D`!0~?-2yE7rqp]OM;ZS UZ<Me#');
define('LOGGED_IN_KEY',    'lu]ojFh}t_hXHXw,rReWDojG/-L<MloZ,<c]xApl(G#,Vn-edR<OaD]r=YpLt<|^');
define('NONCE_KEY',        'cHxN%+AW1#{?8O-#I-1iEB~wHgZ?;0A5l?!_n$d9R6*&*Y:0)*ceSd!!Ef4D+!kD');
define('AUTH_SALT',        'z-L+fff8jjm+9>9WNF<%os.}^ Lpp;X.n2wON~Bf+|]SkyfBYT+IGtOCuNU~r2T%');
define('SECURE_AUTH_SALT', 'Z6401[C!Ysv;sMfxkg;-`^&vNK2vgp%s_;K##/S^^k6|s~sQpbkF2m83,aq4K`rx');
define('LOGGED_IN_SALT',   'WMT$&:BXwVfL9aZ7Z~U_ Bs i0y_/4W7UccG>Dw4Z70[gAN|[@A><|-rsa/gifg>');
define('NONCE_SALT',       '.zD6a0_^KieTV1BIN;=5wrd4^E+;muLv0a[I9D=>piP-JPts0,nRTa~0*:O8O3|y');

define('WP_DEBUG', false);

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

require_once( ABSPATH . 'wp-settings.php' );
