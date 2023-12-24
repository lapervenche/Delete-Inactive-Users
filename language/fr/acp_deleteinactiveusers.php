<?php
/**
*
* @package phpBB Extension - Delete Inactive Users
* @copyright (c) 2019 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
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

$lang = array_merge($lang, [
	'DELETE_INACTIVE_USERS_ALLOW'						=> 'Activer la suppression des utilisateurs inactifs',
	'DELETE_INACTIVE_USERS_ALLOW_EXPLAIN'				=> 'Si cette option est définie sur oui, Cron sur les utilisateurs sera allumé.',
	'DELETE_INACTIVEUSERS_ENABLE_MES'					=> 'Activer le message d\'enregistrement',
	'DELETE_INACTIVEUSERS_ENABLE_MES_EXPLAIN'			=> 'Affichez le message après que l\'utilisateur est enregistré avec des détails sur le nombre de postes et la période.',
	'DELETE_INACTIVEUSERS_ENABLE_EMAIL'					=> 'Activer le message E-Mail',
	'DELETE_INACTIVEUSERS_ENABLE_EMAIL_EXPLAIN'			=> 'E-mail des utilisateurs inactifs avec message de suppression du compte.',
	'DELETE_INACTIVE_USERS_TIME_VALUE'					=> 'Définir une période de temps pour les utilisateurs de avertissement/supprimer',
	'DELETE_INACTIVE_USERS_TIME_VALUE_EXPLAIN'			=> 'Cette option définira la minuterie avertissement/supprimer. La valeur par défaut est de 24 heures.',
	'DELETE_INACTIVE_USERS_HOURS'	=> [
		1 => 'heure',
		2 => 'Heures',
	],
	'DELETE_INACTIVE_USERS_POSTS'						=> 'Déterminer les sujets/réponses postés',
	'DELETE_INACTIVE_USERS_POSTS_EXPLAIN'				=> 'Définissez le nombre de postes publiés pour les utilisateurs. La valeur par défaut est 0.',
	'DELETE_INACTIVE_USERS_INACTIVE_PERIOD'				=> 'Sélectionner la période',
	'DELETE_INACTIVE_USERS_INACTIVE_PERIOD_EXPLAIN'		=> 'Définir la période d\'inactivité par les utilisateurs. Date d\'enregistrement et dernière date d\'activité.',
	'DELETE_INACTIVE_USERS_SAVED'						=> 'Supprimer les paramètres inactifs des utilisateurs enregistrés.',
	'DELETE_INACTIVE_USERS_GROUP_EXCEPTIONS'			=> 'Exception de groupe(s)',
	'DELETE_INACTIVE_USERS_GROUP_EXCEPTIONS_EXPLAIN'	=> 'Excluez les groupes ici qui ne seront pas concernés.<br />Sélectionnez plusieurs groupes en maintenant le clic gauche souris appuyé et en cliquant dans lal fenêtre <samp>CTRL</samp> (ou <samp>&#8984;CMD</samp> dans un Mac) and clicking.',
]);
