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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'lacafeteria' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'admin' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'admin' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '}!GU^|$(u+6RRmQoEhV=b2fh]P@Nw.3;Jy!3:[PeA=xNZ$Tinl6xWClbY)nL7o[<' );
define( 'SECURE_AUTH_KEY',  'ul&w.;|ZvV9ZbP*)J0N51*(a<C!v9<tX& G2[n~Om>}dRH+6$tqB6.i5vD*x7Q$L' );
define( 'LOGGED_IN_KEY',    'yH:m#!;cg:?@[cglkIo/5rt+1r2ifl6|]WKQgNf:tnWN~SNf2;.C07v1}?<9%R3=' );
define( 'NONCE_KEY',        'a8?|W-uyn+m_(j<3<0@={Br(f~S(MHreB,9t|2d_p!oD.6;-Vz5dRmC_$%H&#_4{' );
define( 'AUTH_SALT',        'Nu p5-0~a,6K*_FWQ N^$v_G;gh&7k I%x#h^-)hFofS#+pt=$*Vi^<So{}F^Y_K' );
define( 'SECURE_AUTH_SALT', 'C;sD?XGY%l0$]GgP;swTp>JI,jEfEhJ#;SJQ7c]G=3z 2:u$.;)I8)#<K>/b0:MM' );
define( 'LOGGED_IN_SALT',   'W/4?HO bJZ6Gn=xN5&V^@cr.1:(2@B&_(}MkYu3TLOBZB=8!6_I&OX9&G5I2-q f' );
define( 'NONCE_SALT',       ',^}spoacm; d|G$1qpZyyc>)IvxT6R=ck}0Ul,s1{~Z3zFxXA]SvRX7!NE,]1LtL' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
