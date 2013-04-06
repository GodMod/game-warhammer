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
$english_array = array(
	'classes' => array(
		0 => 'Unknown',
		1 => 'Archmage',
		2 => 'Black Guard',
		3 => 'Black Orc',
		4 => 'Bright Wizard',
		14 => 'Choppa',
		5 => 'Chosen',
		6 => 'Disciple of Khaine',
		7 => 'Engineer',
		10 => 'Ironbreaker',
		11 => 'Knight of the Blazing Sun',
		12 => 'Magus',
		13 => 'Marauder',
		15 => 'Rune Priest',
		16 => 'Shadow Warrior',
		8 => 'Shaman',
		9 => 'Slayer',
		17 => 'Sorcerer',
		18 => 'Squig Herder',
		19 => 'Swordmaster',
		20 => 'Warrior Priest',
		21 => 'White Lion',
		22 => 'Witch Elf',
		23 => 'Witch Hunter',
		24 => 'Zealot',
	),
	'races' => array(
		'Unknown',
		'Dwarfs',
		'Empire',
		'High Elves',
		'Greenskins',
		'Chaos',
		'Dark Elves'
	),
	'factions' => array(
		'Order',
		'Destruction'
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
		'medium_robe' 	=> 'Medium Robe',
		'light'			=> 'Light Armour',
		'medium'		=> 'Medium Armour',
		'heavy'			=> 'Heavy Armour',
		'tank'			=> 'Tank',
		'melee'        	=> 'Melee',
		'range'	   	    => 'Ranged',
		'support'       => 'Supporter',
		'healer'        => 'Healer',
		'role1' => 'Tank',
		'role2' => 'Melee',
		'role3' => 'Ranged',
		'role4' => 'Supporter',
		'role5'	=> 'Healer',
		
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