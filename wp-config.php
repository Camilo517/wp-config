<?php
/* Cambiar a TRUE para hacer debug */
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', false );
define( 'SCRIPT_DEBUG', false );
define( 'SAVEQUERIES', false );
define('WP_DEBUG', false);
/* 5 revisiones como maximo por entrada o pagina */
define('WP_POST_REVISIONS', 5 );
/* Acceso FTP */
define( 'FS_METHOD', 'direct' ); //Acceso FTP directo
define( 'FTP_SSL', true ); // SSL FTP
/* Rendimiento */
define( 'COMPRESS_CSS', true ); //Comprimir css
define( 'COMPRESS_SCRIPTS', true ); //Comprimir scripts
define( 'CONCATENATE_SCRIPTS', true ); //Concatenar scripts
define( 'ENFORCE_GZIP', true ); //Forzar gzip
/* Editor de archivos */
define('DISALLOW_FILE_EDIT', true); //No se permite editar codigo desde wp-admin
/* Actualizaciones */
define( 'AUTOMATIC_UPDATER_DISABLED', true ); //Deshabilitar actualizaciones mayores
define( 'WP_AUTO_UPDATE_CORE', 'minor' ); //Activar actualizaciones menores
/* HTTPS */
define('FORCE_SSL_LOGIN', true);
define('FORCE_SSL_ADMIN', true);
/* Memoria PHP */
define('WP_MEMORY_LIMIT', '256M'); //Frontend
define( 'WP_MAX_MEMORY_LIMIT', '256M' ); //Backend

/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/* Desactivar XML-RPC para prevenir ataques DDos */
add_filter('xmlrpc_enabled', '__return_false');
