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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'DW_1;IdfF?T_r`p)kFdlvtfEBFttuC2GZx/7Fd}Q_TiRX^iXBY Ue%%U#2f).ubo' );
define( 'SECURE_AUTH_KEY',  '8*+!jCH~ P[`kquOwQEh h=$=G %dR&c(*#sKp7;r{4[VMSn9*3!qjl~hh9wJguw' );
define( 'LOGGED_IN_KEY',    '+v&dYM7iF87@@xv5E6KT[GZM2c21GiWTA{i@Gm`QTvMBLtNSF9a/3,Xm/L{gL.=]' );
define( 'NONCE_KEY',        '&d_qm-xR)QM3:zI[1W>Pfpoco}5cY[of{BAa-+WO?7ge/nECOoNeh[yD~A*QKNFL' );
define( 'AUTH_SALT',        'z<y#N38(GTvkn&66%s@$ yJkw1j/pFIb+: ^,0et_/3)G*oz:e3+S*w<9@6an<:e' );
define( 'SECURE_AUTH_SALT', ',#/^14qFvQl$}>Q0d!DnvmxjZn`nBLx{~lzk_%WLs^F4 e$>%(x7HA>IN{?ScW3:' );
define( 'LOGGED_IN_SALT',   '6,pJj3Ry1B7Wv[|i}`-4tZ^ld=mIZV>J|4}_$4{}D|-:WvT3+Q]*COGsHF?EZ(Y_' );
define( 'NONCE_SALT',       'G@$>CqJz/F7wN.GkP2 .np5Srs/[/`_j!fdQx>O7v&mhzi5;hF`aC4_)WaS[^Kio' );
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
