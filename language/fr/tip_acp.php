<?php
/**
 *
 * Topic Image Preview. An extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2018 Matt Friedman
 * @license GNU General Public License, version 2 (GPL-2.0-only)
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
// ’ « » “ ” …
//
$lang = array_merge($lang, [
	'ACP_TIP_TITLE'					=> 'Aperçu des images du sujet',
	'ACP_TIP_DISPLAY_AGE'			=> 'Source des images à afficher',
	'ACP_TIP_DISPLAY_AGE_EXPLAIN'	=> 'Permet de sélectionner la source des images à afficher. Si les nouveaux messages sont sélectionnés la plupart des nouvelles images publiées seront affichées. Si, les anciens messages sont sélectionnés les anciennes images publiées seront affichées.',
	'ACP_TIP_NEWEST_POST'			=> 'Nouveaux messages',
	'ACP_TIP_OLDEST_POST'			=> 'Anciens messages',
	'ACP_TIP_DISPLAY_NUM'			=> 'Nombre d’images à afficher',
	'ACP_TIP_DISPLAY_NUM_EXPLAIN'	=> 'Permet de saisir le nombre maximum d’images à afficher dans l’aperçu. Saisir la valeur 0 pour désactiver les aperçus.',
	'ACP_TIP_DISPLAY_DIM'			=> 'Taille maximale des images dans l’aperçu',
	'ACP_TIP_DISPLAY_DIM_EXPLAIN'	=> 'Permet de saisir la valeur maximale de la hauteur/largeur pour chaque image de l’aperçu.',
]);
