<?php
/** 
 * As configura√ß√µes b√°sicas do WordPress.
 *
 * Esse arquivo cont√©m as seguintes configura√ß√µes: configura√ß√µes de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Voc√™ pode encontrar mais informa√ß√µes
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Voc√™ pode obter as configura√ß√µes de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo √© usado pelo script ed cria√ß√£o wp-config.php durante a
 * instala√ß√£o. Voc√™ n√£o precisa usar o site, voc√™ pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configura√ß√µes do MySQL - Voc√™ pode pegar essas informa√ß√µes com o servi√ßo de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'fdl');

/** Usu√°rio do banco de dados MySQL */
define('DB_USER', 'fdl');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'fdl');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na cria√ß√£o das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. N√£o altere isso se tiver d√∫vidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves √∫nicas de autentica√ß√£o e salts.
 *
 * Altere cada chave para um frase √∫nica!
 * Voc√™ pode ger√°-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Voc√™ pode alter√°-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto ir√° for√ßar todos os usu√°rios a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'coloque sua frase √∫nica aqui');
define('SECURE_AUTH_KEY',  'coloque sua frase √∫nica aqui');
define('LOGGED_IN_KEY',    'coloque sua frase √∫nica aqui');
define('NONCE_KEY',        'coloque sua frase √∫nica aqui');
define('AUTH_SALT',        'coloque sua frase √∫nica aqui');
define('SECURE_AUTH_SALT', 'coloque sua frase √∫nica aqui');
define('LOGGED_IN_SALT',   'coloque sua frase √∫nica aqui');
define('NONCE_SALT',       'coloque sua frase √∫nica aqui');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Voc√™ pode ter v√°rias instala√ß√µes em um √∫nico banco de dados se voc√™ der para cada um um √∫nico
 * prefixo. Somente n√∫meros, letras e sublinhados!
 */
$table_prefix  = 'fl_';

/**
 * O idioma localizado do WordPress √© o ingl√™s por padr√£o.
 *
 * Altere esta defini√ß√£o para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao portugu√™s do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibi√ß√£o de avisos durante o desenvolvimento.
 * √© altamente recomend√°vel que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto √© tudo, pode parar de editar! :) */

/** Caminho absoluto para o diret√≥rio WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as vari√°veis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
