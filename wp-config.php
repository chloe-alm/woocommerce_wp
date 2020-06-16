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
define( 'DB_NAME', 'cactushadow' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '00,2|X-mf@Kqi2:wz&SPSIB&CxTw,Mv)h}%w;N:gC%`^Qhf^=ma}EBLwY|YkTz&C' );
define( 'SECURE_AUTH_KEY',  '+&3Q&vMK<IDyI]#D%r.c)j0nm(0mwh~fLA-aTasWJHb5*V8,;>.Y;h-z8$@AfS25' );
define( 'LOGGED_IN_KEY',    ']LK]Mi;-uABp|^KRy.?bTc3im01EqY/u~TWdhwg7C}s28.d!)K>w>?HK86dCqk6T' );
define( 'NONCE_KEY',        'f=C Jr?1#-H][*O`[>1zkevfo=o}Y^8{L[t}XMw~)R?1)N^Jb8X&.g4O|WilB%TS' );
define( 'AUTH_SALT',        '+~3fh`LhM3~CvIf$Iq#UkL9f}2Aa~=t],,Gv|g)9}-Ea@~=K2c7<Qu<9j0FW3:KV' );
define( 'SECURE_AUTH_SALT', '4$3ds_RQw,hpEe`:>8zwz@VDyuKm|;#ZWc0d74GPo6YcTyBXRI:n`q{jlJzmtSr0' );
define( 'LOGGED_IN_SALT',   'e$^W7s]H:.??l0V,Ei03Coj$6cc&DyL^m_@-pg|5(ow%6N+edJDh^BcXHZJE>kZ4' );
define( 'NONCE_SALT',       '(3(]Y`/81,If7|=tVS`e3F?xC~:V,SWAdN{/SBIFr[<Ihcq*r21FT|sT}Mn[%yRv' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
