<?php
/* Tablas (Pon aqui un texto o algo diferente) */
$table_prefix = 'E31n600u8_';

/* Desactivar XML-RPC para prevenir ataques DDos */
add_filter('xmlrpc_enabled', '__return_false');
/* 5 revisiones como maximo por entrada o pagina */
define('WP_POST_REVISIONS', 5 );
/* Acceso FTP */
define( 'FS_METHOD', 'direct' ); //Acceso FTP directo

/* Rendimiento (Nota: En muchas instalaciones puede dar errores / conflictos con otros plugins de cache - minificacion) */
//define( 'COMPRESS_CSS', true ); //Comprimir css
//define( 'COMPRESS_SCRIPTS', true ); //Comprimir scripts
//define( 'CONCATENATE_SCRIPTS', true ); //Concatenar scripts
//define( 'ENFORCE_GZIP', true ); //Forzar gzip
/* Editor de archivos */
define('DISALLOW_FILE_EDIT', true); // No se permite editar codigo desde wp-admin
/* Actualizaciones */
define( 'AUTOMATIC_UPDATER_DISABLED', true ); //Deshabilitar actualizaciones mayores
define( 'WP_AUTO_UPDATE_CORE', 'minor' ); // Activar actualizaciones menores
/* HTTPS */
define('FORCE_SSL_LOGIN', true);
define('FORCE_SSL_ADMIN', true);
/* Memoria PHP */
define('WP_MEMORY_LIMIT', '256M'); //Frontend
define( 'WP_MAX_MEMORY_LIMIT', '512M' ); //Backend

/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
