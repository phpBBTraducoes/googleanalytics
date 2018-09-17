<?php
/**
*
* Google Analytics extension for the phpBB Forum Software package.
* Brazilian Portuguese translation by henrique.seven2011 and update by eunaumtenhoid (c) 2014 [ver 1.0.4] (https://github.com/phpBBTraducoes)
* @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
* 
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_GOOGLEANALYTICS'				=> 'Google Analytics',
	'ACP_GOOGLEANALYTICS_ID'			=> 'Google Analytics ID',
	'ACP_GOOGLEANALYTICS_ID_EXPLAIN'	=> 'Digite o seu código do Google Analytics ID, por exemplo : <samp>UA-0000000-00</samp>.<br /><br />O Google Analytics pode rastrear seus usuários registrados em vários dispositivos e sessões, para uma contagem de usuários mais precisa em seus relatórios. Para ativar essa funcionalidade aprimorada, o rastreamento de ID do usuário deve ser configurado em sua conta do Google Analytics. <a href="https://support.google.com/analytics/answer/3123666"> Clique para obter mais informações</a>.',
	'ACP_GOOGLEANALYTICS_ID_INVALID'	=> '“%s” não é um código ID Google Analytics válido.<br />Deve ser dessa forma “UA-0000000-00”.',
	'ACP_GA_ANONYMIZE_IP'				=> 'Ativar anonimização de IP',
	'ACP_GA_ANONYMIZE_IP_EXPLAIN'		=> 'Ative essa opção se quiser que os dados coletados pelo Google Analytics estejam em conformidade com o Regulamento Geral de Proteção de Dados da União Europeia (GDPR). Observe que a ativação dessa opção pode reduzir um pouco a precisão dos relatórios geográficos.',
));
