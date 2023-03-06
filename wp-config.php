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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'makingart' );

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
define( 'AUTH_KEY',         'Yp4Q7l}hr&R^5Lwt.&]ABdTq+`:k]XxCp(rNm?0z?w>f|kE67n;)$CW0-iFM&m Q' );
define( 'SECURE_AUTH_KEY',  'd.K|dDLo/`Y9v&2;btU*A5wGzb`no.9(gPA)bAWu<+YdDeYed&t8Kk66|jJGI5VL' );
define( 'LOGGED_IN_KEY',    'A2OM^s9Jw`v:pYOsy<q[A/-jV,C(<ahWo61;?zeP;:}%41Rqia(M3}!>f`c:-[}T' );
define( 'NONCE_KEY',        '/H|yA^f4#[UB?Iv3ar-nJX<(qmE8Y&LF>,.KAbPO%87K`UO M^]Afwf^{O0a^wgK' );
define( 'AUTH_SALT',        '3e?>fk!cW*l<6vK0sLoebvpQicGZ_by2F&a#.9?ZkA/0bvw5dvWWQLq`0d{so+Ht' );
define( 'SECURE_AUTH_SALT', 'm?i~:XT*}R$jK$Txfq:MA<I=ck&Tvz5lK/e)V|zav.~:S8V)uH^}Vp4bQAbnK!-v' );
define( 'LOGGED_IN_SALT',   'UpRevmbXx<a2Tvp469IX4(z-A:2pNzJTN3e`;?e|y!Bj^fxw%<+@!Y|lE}O51vHJ' );
define( 'NONCE_SALT',       's[UK~CDW812df<<,8?oG%Z!C=rdHNf99$B%|s+c&]!$!fED?Ka`p(l?gtmCKogM5' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'ma_';

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
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
