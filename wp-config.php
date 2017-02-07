<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'mi_sitio');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'clave.123');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'j}.uv-]90YAgto-4h`4HG(_:pWRZG[`N_^pH!Z<uZ _h&t~:(]-]mLxYT.99! Z8');
define('SECURE_AUTH_KEY', '@*]n<Zd$$.3N(8A8NxLonjY<Kchk|w<[VJy/QWmn6s9~rAy*8MA/(gkhh@,@Y*);');
define('LOGGED_IN_KEY', 's`n(FP1%1o^R?7R6>-+V`pZ0xKOL[I_V$0^S}[4?ACR)[Xc9j#3*+rJ+Oih~n=,E');
define('NONCE_KEY', '4qzm3p#&b!iN<w|Ib]WC ~|l]@cIhrMe_?U]n_h(GNF<P+9Y: ( `U}F`1C]iaGf');
define('AUTH_SALT', 'R$K5fu5J1?DKDP-jr~iYc|.FT7Gdr&VyD@mTv8a17LSxo{Ulgg3!y-o`^n(<8m-/');
define('SECURE_AUTH_SALT', 'VXWeEfHuZZ!(`p8AA (.MFat.RM~czx[&iu7RvV$SB.ve$h8)NYz3uR}DMe@#0^1');
define('LOGGED_IN_SALT', 'y{[]-c5e+Y/a&>bOzK1PZjB}.EAxD(K8wYOA4~O4_ Cro-4FqJuMidE){ jcvCEY');
define('NONCE_SALT', 'a4e%,hCDuzT0x0ZN7WG[-5Rs|A#ik7]5yx|}/*yhG]2]zs]ZD?dCjPTeo?+D%SK1');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

