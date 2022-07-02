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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'nl~-Flpb.cF3bP]FMIzqF9=W!L]KFcgyX7Ud}vlrzf.M -[K_^rLb=]J/wK_DJL5' );
define( 'SECURE_AUTH_KEY',  'S*E#5>L]M&Y7<[U|QDi%B+*MfSkMbT3wWd/_=y]SM, C?cVx&g(kegS|eJ4x6/@j' );
define( 'LOGGED_IN_KEY',    's]>^@#pqVID^f1Lt+Z>!=QwoFXWSS7o#p?^J[t]8-z%=~(n>xPpM{n)# j?lg$<k' );
define( 'NONCE_KEY',        '*<a>3Z]/$f&Rx w0w2Uji.w*a5q7sr pa@x^Mm>]gE%S7m_UAdQsD{WhX:deGO/(' );
define( 'AUTH_SALT',        ' 9)+y.#%dfZ.qoXae9849y(*NfX-PdpPcnBgh:]*QxAyIDIEV<N-7X+pf!x:Cwi{' );
define( 'SECURE_AUTH_SALT', 'zdM142HhJQT@<~tGGR77#qXF&*T!@G*7P?MOk)ODAptXHPQ,z+-;G;Vl)+Kn&bZ ' );
define( 'LOGGED_IN_SALT',   'kChAHjD=0EY%t`v bP>,^|_K,+kngITZkkWQK`f{ }D>{!MMxcc(&E@+fA7JMV(N' );
define( 'NONCE_SALT',       ',Pi5.]`[=Js)~<]<I?0&@;T%:8M2H:`FY2d>dZ$X{1T/n<yo1I?Mqa!L6G<Q,HZL' );

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
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
