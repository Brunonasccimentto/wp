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
define( 'DB_NAME', 'aprender' );

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
define( 'AUTH_KEY',         '`0ED2f0RdT7w)Vl_`GU2B3`Z+;c*w_),VkD:%uGDrs)h3@[MN??qdIX?`|^fo0r{' );
define( 'SECURE_AUTH_KEY',  'x87qy=C<d33/hk6jx%Q:En`1ObQCh!*IuG^czBfA(*ZD?7t.;r~#f>@7!EEothpT' );
define( 'LOGGED_IN_KEY',    '|)I1mARXP8qpX=NM&-}zS(pM I&u .:0f9DO:+tDN+exScJeYv].N&^DQEKY0JR9' );
define( 'NONCE_KEY',        '-{Ku@ic%L2LD0{x?f7{Fpp!aAl4qh&e1&.swD=wv v`?)C]+q58P(9vd7-=3>HQ>' );
define( 'AUTH_SALT',        '&L;%;ilJXTb}|tu]JmudND$d>w1|M(ha,Vf0+uWj(hKIK?EhZ^7{m@,+qZ>A(hu(' );
define( 'SECURE_AUTH_SALT', 'NIfd,)VGy%$A&mPm1L%K@3< VxRFR_zY8=Tr:dLR-8_n_JE7p4knQp`Y+QMTX_ER' );
define( 'LOGGED_IN_SALT',   'm37=^<bAJcaE1%c}/h>vJHnSIC#B1OXq2*6K=fLMG3NOneJ`Wh0zYq~D|:v#T<ZT' );
define( 'NONCE_SALT',       'uC`g/!c[X,V!#~+kWN=KwzFrZkg.K;X2QzygeBVW=|vwt167B|w>:r$$wd!/=U1%' );

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
