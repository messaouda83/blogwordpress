<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wpuser' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '^1R#IuNuqjT;:bvZ%)Em#&A`[?{xR)CKsF)nait(2_rPx9%_)[X,Bzo2X$}<V71<' );
define( 'SECURE_AUTH_KEY',  '9Sdy0x.pGB@oz(>/.kQN0EZq!*R,-O2#T[[n%Ht2g|^pD1&0<ge/($X;G:T1hlpY' );
define( 'LOGGED_IN_KEY',    'h>F5t=NOY=kp%uax/&+%@rmb8n8zwm4a.):mNGN>gbFWJhGflL`gOaHJZl$W0y38' );
define( 'NONCE_KEY',        'OkN5]DV}MMaPP)%#5Y>h0 OU`FGKE1Rru-b2weK[*uPxr2cNM$DSF(z(f@{qv,}I' );
define( 'AUTH_SALT',        '5`}mlAIQi9O7d}c.18 2.8z|+U,*Kz]P>sj$,=)e,UX5t6(w?<s}NkiUtvz6+u?s' );
define( 'SECURE_AUTH_SALT', '6rIr8l@dO|}Tl`D!4~csP:[LTECgII9ckcp9cy_)bzyOn~8Z%<v!}|DJ#b-C.Far' );
define( 'LOGGED_IN_SALT',   'I`%iyJvxEGLRN!>=7Cqq*AZj2)V<-Ff!S]<QUhtsb9D>5d$=G>.QM!o:7>20u)EE' );
define( 'NONCE_SALT',       'JU@K UBU &Meo8nCB0w7{z w2K;4utbD5!zM3jSBOka%HCiw^Pg17#ocwz_L~k^P' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'zm_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
