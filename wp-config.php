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
define( 'DB_NAME', 'nanomania' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'toto' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'scalp4ps5' );

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
define( 'AUTH_KEY',         'g6I.v+1E0D^G6Ttpgq;5A,lw^2DbXpQcd1wZO4gq2|]9rD)/{=feX/W;)d>i}^V$' );
define( 'SECURE_AUTH_KEY',  '?inuVt2;JX;,:zC}7_C+Mg*R|WLOJ4@Xf>(5HgPwD6T#@p`gQqy{P9H60yIQP<rp' );
define( 'LOGGED_IN_KEY',    '6`Z6>8[TjQS=G .Q%*bWSTmpc|r*_iu5YF2QIw}g}c~/5oS`K/]S!x!n/]|U?~E%' );
define( 'NONCE_KEY',        'HC8najg&jD0~QtJAx~tWk,?c,2OCm>K:F`3/5#b&wo<*uVZQSzFOI9pS2PwB_(;J' );
define( 'AUTH_SALT',        '5M(Y`Fc.3jRb!1PfFj|lmc.;Zg[=Q5#-*?/Z`}tSt?l~A5UCQ%dIeMUH|~HlCH6p' );
define( 'SECURE_AUTH_SALT', 'H!8+?Vnkaq8IRYh}%5]G.!5(e)K3mU>MqBK_U=~S_>}xA|PDV/o5J&y_tKcvhfu9' );
define( 'LOGGED_IN_SALT',   'i W9U.J g)e2*J?`s|,T%?*-p|&RD0I))tt@X56eb)/VEL%*:iEp0!~r(5lQCaoE' );
define( 'NONCE_SALT',       '%Q##tmOjX8KJ@Hkb@=x9T#X_D^.0fU1t<pJRf]f$r)sF~Kqx,N$,bxqdy_,0AFD?' );
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
