<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'onner.github.io' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%h=06Q^ON$_b.GZ5Is`6`)1]-Z:~[[xULr0U ][3`x^CBink WCqZl<uF<+oVA_k' );
define( 'SECURE_AUTH_KEY',  'mi?y-@3D)MNUe%jr+UPj_je)gR+%u9/_i$!W$VIhBI;r*6e(|-rv[6K]9Fr(j?f,' );
define( 'LOGGED_IN_KEY',    'xcnjfo4Bn!Eju#s0c)gK;PhG0m3&&a3yzII$~Y!Hh+vp4xvYc;:go7z*uc HOgud' );
define( 'NONCE_KEY',        '}$>pkgSp;iI<Nq>oojb|X Fj3Qyg*.-Lr[[W`inlBX3#h#zPt|m.>{yM]}elY].a' );
define( 'AUTH_SALT',        'EFR#+|@L`{tk 8j&ilnj+,eVv+7Bw&5+Dt6be0)Qcb_uY<JEuFVXTUQ!SHp81$,A' );
define( 'SECURE_AUTH_SALT', '4(L3e+h6wImNk7A6hlaVmh&^-17UAsXHpy`KzuEum?fzd;#<,[su#;af(w0b;u{K' );
define( 'LOGGED_IN_SALT',   '<&8;o/~1$Yt][V5?QMnSXsS6Dap5hI^6~R,!rMZ_>:J4?V.w:iC*:tYi/yqrE|[j' );
define( 'NONCE_SALT',       '/H6y)2Je<ahLI 9:<ehpI!NW<]x+;]z8OI<$w3io[e>O7o&2.Y`88+aq:r^3i1W?' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
