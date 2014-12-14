<?php
/*	Project:	EQdkp-Plus
 *	Package:	Warhammer Online game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$english_array = array(
	'factions' => array(
		'order'	=> 'Order',
		'chaos'	=> 'Destruction'
	),
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'Archmage',
		2	=> 'Black Guard',
		3	=> 'Black Orc',
		4	=> 'Bright Wizard',
		5	=> 'Chosen',
		6	=> 'Disciple of Khaine',
		7	=> 'Engineer',
		8	=> 'Shaman',
		9	=> 'Slayer',
		10	=> 'Ironbreaker',
		11	=> 'Knight of the Blazing Sun',
		12	=> 'Magus',
		13	=> 'Marauder',
		14	=> 'Choppa',
		15	=> 'Rune Priest',
		16	=> 'Shadow Warrior',
		17	=> 'Sorcerer',
		18	=> 'Squig Herder',
		19	=> 'Swordmaster',
		20	=> 'Warrior Priest',
		21	=> 'White Lion',
		22	=> 'Witch Elf',
		23	=> 'Witch Hunter',
		24	=> 'Zealot',
	),
	'races' => array(
		0	=> 'Unknown',
		1	=> 'Dwarfs',
		2	=> 'Empire',
		3	=> 'High Elves',
		4	=> 'Greenskins',
		5	=> 'Chaos',
		6	=> 'Dark Elves'
	),
	'roles' => array(
		1	=> 'Tank',
		2	=> 'Melee',
		3	=> 'Ranged',
		4	=> 'Supporter',
		5	=> 'Healer'
	),
	
	'lang' => array(
		'warhammer'					=> 'Warhammer Online',
		'robe'						=> 'Robe',
		'medium_robe'				=> 'Medium Robe',
		'light'						=> 'Light Armour',
		'medium'					=> 'Medium Armour',
		'heavy'						=> 'Heavy Armour',
		'tank'						=> 'Tank',
		'melee'						=> 'Melee',
		'range'						=> 'Ranged',
		'support'					=> 'Supporter',
		'healer'					=> 'Healer',

		//Events
		'event1'					=> 'Altdorf Sewers',
		'event2'					=> 'The Sacellum Dungeon',
		'event3'					=> 'Mount Gunbad',
		'event4'					=> 'The Bastion Stair',
		'event5'					=> 'Warpblade Tunnels',
		'event6'					=> 'Sigmar Crypts',
		'event7'					=> 'The Bloodwrought Enclave',
		'event8'					=> 'The Bilerot Burrow',
		'event9'					=> 'The Lost Vale',
		
		'uc_race'					=> 'Race',
		'uc_class'					=> 'Class',

		// Admin Settings
		'core_sett_fs_gamesettings'	=> 'Warhammer Online Settings',
		'uc_faction'				=> 'Faction',
		'uc_faction_help'			=> 'Select the default faction',
	),
);
?>