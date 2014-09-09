<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:		2009
 * Date:		$Date$
 * -----------------------------------------------------------------------
 * @author		$Author$
 * @copyright	2006-2011 EQdkp-Plus Developer Team
 * @link		http://eqdkp-plus.com
 * @package		eqdkp-plus
 * @version		$Rev$
 * 
 * $Id$
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$german_array = array(
	'factions' => array(
		'order'	=> 'Ordnung',
		'chaos'	=> 'Zerstörung'
	),
	'classes' => array(
		0	=> 'Unbekannt',
		1	=> 'Erzmagier',
		2	=> 'Schwarzer Gardist',
		3	=> 'Schwarzork',
		4	=> 'Feuerzauberer',
		5	=> 'Auserkorener',
		6	=> 'Jünger des Khaine',
		7	=> 'Maschinist',
		8	=> 'Schamane',
		9	=> 'Slayer',
		10	=> 'Eisenbrecher',
		11	=> 'Ritter des Sonnenordens',
		12	=> 'Magus',
		13	=> 'Chaosbarbar',
		14	=> 'Spalta',
		15	=> 'Runenpriester',
		16	=> 'Schattenkrieger',
		17	=> 'Zauberer',
		18	=> 'Squig-Treiber',
		19	=> 'Schwertmeister',
		20	=> 'Sigmarpriester',
		21	=> 'Weißer Löwe',
		22	=> 'Hexenkriegerin',
		23	=> 'Hexenjäger',
		24	=> 'Zelot',
	),
	'races' => array(
		0	=> 'Unbekannt',
		1	=> 'Zwerge',
		2	=> 'Imperium',
		3	=> 'Hochelfen',
		4	=> 'Grünhäute',
		5	=> 'Chaos',
		6	=> 'Dunkelelfen'
	),
	'roles' => array(
		1	=> 'Tank',
		2	=> 'Nahkämpfer',
		3	=> 'Fernkämpfer',
		4	=> 'Unterstützer',
		5	=> 'Heiler'
	),

	'lang' => array(
		'warhammer'						=> 'Warhammer Online',
		'robe'							=> 'Robe',
		'medium_robe'					=> 'Mittlere Robe',
		'light'							=> 'Leichte Rüstung',
		'medium'						=> 'Mittlere Rüstung',
		'heavy'							=> 'Schwere Rüstung',
		'tank'							=> 'Tank',
		'melee'							=> 'Nahkämpfer',
		'range'							=> 'Fernkämpfer',
		'support'						=> 'Unterstützer',
		'healer'						=> 'Heiler',

		//Events
		'event1'						=> 'Altdorf Sewers',
		'event2'						=> 'The Sacellum Dungeon',
		'event3'						=> 'Mount Gunbad',
		'event4'						=> 'The Bastion Stair',
		'event5'						=> 'Warpblade Tunnels',
		'event6'						=> 'Sigmar Crypts',
		'event7'						=> 'The Bloodwrought Enclave',
		'event8'						=> 'The Bilerot Burrow',
		'event9'						=> 'The Lost Vale',

		'uc_race'						=> 'Rasse',
		'uc_class'						=> 'Klasse',

		// Admin Settings
		'core_sett_fs_gamesettings'		=> 'Warhammer Online Einstellungen',
		'uc_faction'					=> 'Fraktion',
		'uc_faction_help'				=> 'Wähle die Standard-Fraktion',
	),
);
?>