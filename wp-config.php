<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'ast');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!RE2~-=pxl)nYTnOm6~-WG)CSNOx4T8o>7{rf}^w.-_<F ba&PP>!Dvn{gK[3!Ts');
define('SECURE_AUTH_KEY',  'Oq3rba[^hM-(2v-Zk&<$34N` ]NFI}e*qr-Z-TPHZ>Tukob-6v,Jk&(|rVn,DrPh');
define('LOGGED_IN_KEY',    '`t!woYW+#X<)+4n&|HRxnL/}5S-PzDbz> jJ3/K4vT7 DnuB-#fCd1#]q5$cQ1c4');
define('NONCE_KEY',        'xu5ECWv_fJp0}WcSLOKDZ8w=v![.v5472[D`oT)Q3}o<Q!12AW>(6cJsx[WueW-6');
define('AUTH_SALT',        'b$36tm&<btCD#]OU2 x}b7jCDII0?*;#|rXITwX9#908K}V20JmKMbKd2`Bz#P=!');
define('SECURE_AUTH_SALT', '+-tH$xzsfnThi|o$J~2ck4q3WJ(<0t.h-b%VYn$OXK[*6r+wR,`Fq%-^%2&xSo2I');
define('LOGGED_IN_SALT',   '6lcE.g&`$!LIlyvt(bXXnA>q0c3mRP@Z%C|P%FPJ;?E3^*Kz*t%=&5Y1v3Ul9 qg');
define('NONCE_SALT',       'E&)FvC2Z<-Z1v3e 2BF@V)%dV P]PhZ(%Y5ld5CZ1$a)0LN*|Dep>F!2;BfLF;yQ');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'ast_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');