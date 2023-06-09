<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'mactar' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         't3>hxh=(ww2BRf)d)~g.ndH=BJ3c7W!E9dcgbbWQw<|IL|eN6^(o$ln}6^Uz~u<F' );
define( 'SECURE_AUTH_KEY',  ']s-7>b&nl7kkc?>Z(jKs]r)-z@DT`O{[#~x>N9xm$Ai5fH(N,GVO%c f*zEt?ml#' );
define( 'LOGGED_IN_KEY',    'Rta>T=c3cC/?]{SI)|/?b*<F&{z7N_t}MmQk}q2F(!crSQ?ZZ}_vFSr83y1MTRN0' );
define( 'NONCE_KEY',        'X0nY%aBkfeOknDosrdhlSr0UM&l+*SVZOld~e|j=pL;;A~b&W<A?aHBVnld$e8%%' );
define( 'AUTH_SALT',        'T,f0)g4OZEFe)S&g:Ge#GAH3Jo>A|dYgHm6^Vy=)q42am)>odmc1]Qn4@h;rDab&' );
define( 'SECURE_AUTH_SALT', 'P66)N1[cBaK>q[V)Mbm[w03YXL}>o|3xazLKW_k<8k:Dxlth&(`U*6jX!,CF+L>p' );
define( 'LOGGED_IN_SALT',   ':qSbJKhctGtc~THzjT!8-z{aX,=(V.D !6S6 TiwAU=hQ&X%ZFCT2rt&GL5(`rtB' );
define( 'NONCE_SALT',       'gJMIL^=U =RPa!^MhRsdAGZY~FI8!Q[f%fG@TW/~(O_l}fkj#s%_r7NXU%$$58=G' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
