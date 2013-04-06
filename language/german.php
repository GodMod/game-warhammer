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
	'classes' => array(
		0 => 'Unbekannt',
		5 => 'Auserkorener',
		1 => 'Erzmagier',
		13 => 'Chaosbarbar',
		10 => 'Eisenbrecher',
		4 => 'Feuerzauberer',
		22 => 'Hexenkriegerin',
		23 => 'Hexenjäger',
		6 => 'Jünger des Khaine',
		12 => 'Magus',
		7 => 'Maschinist',
		11 => 'Ritter des Sonnenordens',
		15 => 'Runenpriester',
		8 => 'Schamane',
		16 => 'Schattenkrieger',
		2 => 'Schwarzer Gardist',
		3 => 'Schwarzork',
		19 => 'Schwertmeister',
		20 => 'Sigmarpriester',
		9 => 'Slayer',
		14 => 'Spalta',
		18 => 'Squig-Treiber',
		21 => 'Weißer Löwe',
		17 => 'Zauberer',
		24 => 'Zelot',
	),
	'races' => array(
		'Unbekannt',
		'Zwerge',
		'Imperium',
		'Hochelfen',
		'Grünhäute',
		'Chaos',
		'Dunkelelfen'
	),
	'factions' => array(
		'Ordnung',
		'Zerstörung'
	),
	
	'roles' => array(
		1 => array(2, 3, 5, 10, 11, 19),
		2 => array(9, 13, 14, 21, 22, 23),
		3 => array(4, 7, 12, 16, 17, 18),
		4 => array(1, 6, 8, 15, 20, 24),
		5 => array(1, 6, 8, 15, 20, 24),
	),
	
	'lang' => array(
		'warhammer' => 'Warhammer Online',
		'robe'			=> 'Robe',
		'medium_robe' 	=> 'Mittlere Robe',
		'light'			=> 'Leichte Rüstung',
		'medium'		=> 'Mittlere Rüstung',
		'heavy'			=> 'Schwere Rüstung',
		'tank'			=> 'Tank',
		'melee'        	=> 'Nahkämpfer',
		'range'	   	    => 'Fernkämpfer',
		'support'       => 'Unterstützer',
		'healer'        => 'Heiler',
		'role1' => 'Tank',
		'role2' => 'Nahkämpfer',
		'role3' => 'Fernkämpfer',
		'role4' => 'Unterstützer',
		'role5'	=> 'Heiler',
		
		//Events
        'event1' => 'Altdorf Sewers',
        'event2' => 'The Sacellum Dungeon',
        'event3' => 'Mount Gunbad',
        'event4' => 'The Bastion Stair',
        'event5' => 'Warpblade Tunnels',
        'event6' => 'Sigmar Crypts',
        'event7' => 'The Bloodwrought Enclave',
        'event8' => 'The Bilerot Burrow',
        'event9' => 'The Lost Vale',
	),
);
?>