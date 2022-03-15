<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp_scratch' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'a}jhIVt9R..t|G*7<hL;M+}/MflMg~B 2!pLP$N.n`GF@JF|6E*MhpYwgZZU[{Pl' );
define( 'SECURE_AUTH_KEY',  '(Jji:Vx}f*p@Lz-28XQT#s3!mr+90:y_&wS$ZA<AJ^Hw,p;OW[]lEvlr:tshCl|Y' );
define( 'LOGGED_IN_KEY',    '1Q}>Qr:.!65uv296vw75vRCH4PO1&(<Du=Do0mQ$r$UJATFf%L;VVq&0<BLo9SPH' );
define( 'NONCE_KEY',        'tcfNIkQm>YW2hz2gN[O?h.igbQkARluB{rct(Gd%|O6D`{PQ@|P[a}=k$YcX|+DU' );
define( 'AUTH_SALT',        'x/viX93{4R7BjXKwdH2 TWjgo&FZm1(6q!;>$_1)j/ ~0m$PokKXEQpBl0K^d@D;' );
define( 'SECURE_AUTH_SALT', '!^POqaYM61E_a{:b%h!h6^-+]!jTuUo/>~P%{3)qk.t-s%KKQG7~0H CSi_UZr4z' );
define( 'LOGGED_IN_SALT',   'd*:chNP9/aHs2Ayb@,:`?s^61(i`[6l[+WUJp:%2${DoUlb^+F*]!dqb?c.jnAr6' );
define( 'NONCE_SALT',       'G3=nMQV= YqUrBk[ i,:FU?s&~GA.w]TB(nHH0BWG/<uufmbPuhi-l{nZ(AK0pn[' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
