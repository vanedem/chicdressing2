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
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\MAMP\htdocs\chicdressing2\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'chicdressing2' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',Gr)zkYE$iB1_C-]-5TFcV1K9m+|@M_ga&VVi<8Q<#op?X^p]}A8uU@jQ$vm|J&L' );
define( 'SECURE_AUTH_KEY',  '89X,5mS8-63ZM~CjjT1f5Wr}-,6FxCLcp5<9Xp0>(-9=>5HqaiMMa4J8C*G?>?{f' );
define( 'LOGGED_IN_KEY',    '^+ZWU/IxLjV/Q?(icT;</#xC)GC/pstA0x0`1C.H-)+bf;&Y3]INEdSg*K+<szj6' );
define( 'NONCE_KEY',        '_-9vJi/VCZ~W8k&Etb5$.B=zrL-&_4L=#cu1VaN5Lp+Ia@b)N3}sNE`.ErQ+Ow>7' );
define( 'AUTH_SALT',        'nCezJpvw/(T]Ww$Q*[vKVI5AIZQ5{}PHN9.Fi fHdg.iES9AhHW*$By]_A_,nF,j' );
define( 'SECURE_AUTH_SALT', '/=ml7ykG9ANq:X`xTGVsXHNOi}>vkWVrFWYXHO[V~FT.D^gOc3!#;PAd8]!W5If1' );
define( 'LOGGED_IN_SALT',   'c-`(#P0[ndC]^iu]NcMUN8j<6rcji.YaUmnF#&YLDZ@La1IZDYC5(|iBo>ca:h4d' );
define( 'NONCE_SALT',       'Z$`(oYl_@JtUbLlk?5?vJ95vgEV6et-,SW#7[>#(9)YgNn7vgq- O[Z^y7F), N4' );
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
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
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
