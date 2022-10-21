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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '.z#.>_wLpzTi!Wl:?t Z{~C6j+*%u8r<P=_ UH8lfoxC#?T/uP)p4QwqB6L&}=_}' );
define( 'SECURE_AUTH_KEY',  'P^@utBPTw`Y+6y+=e;es]SSjE{v&oY]3dCTDdq?(<d]HU54=]-&o9v2|Hx8;y;<}' );
define( 'LOGGED_IN_KEY',    'm=?u9?G^?4r#2XHJCB2MwHG,J$X7fZ96uysd5!R@d4z?[)~W4Hr5)ie%-y!u&~`C' );
define( 'NONCE_KEY',        'M(65TC8g1;kH?<Y[dJ{vX?:N5D3+{y 5C97TH]ds^*+#3H?5Ltydhuz^{y@;ONb-' );
define( 'AUTH_SALT',        '{w3CKEx+g|[xsI;hd&t&N@x *=wvC^o9Hl>@S{nL0|{kKb%5z4vXS(O_uSPz{2V4' );
define( 'SECURE_AUTH_SALT', ':S8DrAu{w?]AAFC1Z**POPSg4)iHf!$?z$LM,:~v@JMF).j)m692TB+&I8;4W~0-' );
define( 'LOGGED_IN_SALT',   '&z#KwJy4>f{$edSA%66b~5f?JN :sG:z[~(<m]Zo:1F_,FVvh(w>%[tdF?/ 3rm(' );
define( 'NONCE_SALT',       'kD}%e08<Fm&BbZ;V6X _@Rr^Ro*nk<b1><F3J^M; )(:t%-p*G9h0oT1>LyPGYq?' );

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
