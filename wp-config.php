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
define('AUTH_KEY', 'i: G_xn{`N>m4[0dcWHUp-jt62S3B/zgpV5^X(:}i)SfUwa0A|ClD^ifFeaN+2Vb');
define('SECURE_AUTH_KEY', 'HPwUt8O2C?T=JzRF6&fzwDLlS[JVQ7LaUJ9U_K)osUAH~3S+BLb[rEfim<{gD(Y.');
define('LOGGED_IN_KEY', '%+/KbbiA!_{U9TCN}^R>AhZ*xUY0v4+{LwM$t@pE~Dewff;#L8XUWGu]zO8K%*Ac');
define('NONCE_KEY', '<3Y#J54x7,(E=1x)RZcD-m,~!S0r}3J(dPTvT96hSUoPG)K|}PQm5c>ym`o[ KSN');
define('AUTH_SALT', 'c8p?F9I:>a[i[Szr^2y0?N!9*$z)r~j)et5i?2tHlFUV*1;=6u{V==u)=#uj(BAR');
define('SECURE_AUTH_SALT', '%,(jwi*]VZ MRC:%!fVz5n-;q;9sd2]hS $JuD+iM!`)#vI,NBiG]j!Z:J:bfHVG');
define('LOGGED_IN_SALT', 'EVaLIRd,iVU>n(OE57+HdjUaB}pD>:enkSs1CTqvi;0w_G@>+a9x|LVHlM2XAw]?');
define('NONCE_SALT', 'L6_rB;>)/@Uo/XovQ|eYR9wT.Tt:-`0)U^hC~:3,r=1m~@#HvDMn*?-xUhIcw#X~');

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

