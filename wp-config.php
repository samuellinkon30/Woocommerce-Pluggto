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
define( 'DB_NAME', 'integracao' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'samuel' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'figueiredo' );

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
define( 'AUTH_KEY',         'r8>R%50ZL7u0v%(J_B9/u 7v-Sih=>Z*2VSOJMnFa;i[Av80aVv*`sQKNw<c5&p,' );
define( 'SECURE_AUTH_KEY',  '60K$:v9IPj+I$FUFJm<#vx$H8Mdy-rpD-pd@<)x0V]P!NF]&[owW3Q<Fv:wDvY:O' );
define( 'LOGGED_IN_KEY',    '9yn[4 H8G+Xh{kI%}eN*/QSgll/iFWU;@$<UT{.Xd+T#J!BeuE!Tc_qfJ};n!U|l' );
define( 'NONCE_KEY',        'IFvYx+u$y[+7Bu3T?F@sI%H=7D[;h6*cs_+E5Kfvy-;&CdfmQQoSBb}{juML>kX1' );
define( 'AUTH_SALT',        '3Q~xb4;H+cRXM(|5lo/:pW8bZeqdKzOYO|/.(i*;;BuID.]VRd298P;8M>u6=W>&' );
define( 'SECURE_AUTH_SALT', '<=DS=!,t51=ayL7WCq@[Ec.rK}Y#6Z^+O/4$39S[D/)8a>yLgb|7QG$^3Fs$>Yi!' );
define( 'LOGGED_IN_SALT',   'Wi%)eL.F`IyJ3Rv|-7?ZcolOAJQm&^*B8Q]Q?`gCSUsiyt)&xS|{#VApQ$akGS6>' );
define( 'NONCE_SALT',       'SVrf-VJDHu!IFA-`/@]E%./_q4N?rdG.v3^8MT>n5o J^!0eC|m8P{$=,Q$jzqkY' );

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

define( 'FS_METHOD', 'direct' );


/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
