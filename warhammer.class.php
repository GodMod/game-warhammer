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

if(!class_exists('warhammer')) {
	class warhammer extends game_generic {
		public $version	= '2.1';
		protected $this_game	= 'warhammer';
		protected $types		= array('classes', 'races', 'factions', 'filters', 'roles');
		protected $classes		= array();
		protected $races		= array();
		protected $factions		= array();
		protected $filters		= array();
		public $langs			= array('english', 'german');

		protected $class_dependencies = array(
			array(
				'name'		=> 'faction',
				'type'		=> 'factions',
				'admin' 	=> true,
				'decorate'	=> false,
				'parent'	=> false,
			),
			array(
				'name'		=> 'race',
				'type'		=> 'races',
				'admin'		=> false,
				'decorate'	=> true,
				'parent'	=> array(
					'faction' => array(
						'order'	=> array(0,1,2,3),
						'chaos'	=> array(0,4,5,6),
					),
				),
			),
			array(
				'name'		=> 'class',
				'type'		=> 'classes',
				'admin'		=> false,
				'decorate'	=> true,
				'primary'	=> true,
				'colorize'	=> true,
				'roster'	=> true,
				'recruitment' => true,
				'parent'	=> array(
					'race' => array(
						0 	=> 'all',					// Unknown
						1 	=> array(7,9,10,15),		// Dwards
						2 	=> array(4,11,20,23),		// Empire
						3 	=> array(1,16,19,21),		// High Elves
						4 	=> array(3,8,14,18),		// Greenskins
						5 	=> array(5,12,13,24),		// Chaos
						6 	=> array(2,6,17,22),		// Dark Elves
					),
				),
			),
		);
		
		public $default_roles = array(
			1	=> array(2, 3, 5, 10, 11, 19),
			2	=> array(9, 13, 14, 21, 22, 23),
			3	=> array(4, 7, 12, 16, 17, 18),
			4	=> array(1, 6, 8, 15, 20, 24),
			5	=> array(1, 6, 8, 15, 20, 24),
		);
		
		protected $class_colors = array(
			0 => '#ffffff',
			1 => '#A0AAFF',
			2 => '#CD8C3C',
			3 => '#CD8C3C',
			4 => '#FFB400',
			5 => '#CD8C3C',
			6 => '#B478FF',
			7 => '#FFB400',
			8 => '#A0AAFF',
			9 => '#FF5050',
			10 => '#CD8C3C',
			11 => '#CD8C3C',
			12 => '#FFB400',
			13 => '#FF5050',
			14 => '#FF5050',
			15 => '#A0AAFF',
			16 => '#FFB400',
			17 => '#FFB400',
			18 => '#FFB400',
			19 => '#CD8C3C',
			20 => '#B478FF',
			21 => '#FF5050',
			22 => '#FF5050',
			23 => '#FF5050',
			24 => '#A0AAFF',
		);

		protected $glang		= array();
		protected $lang_file	= array();
		protected $path			= '';
		public $lang			= false;

		/**
		* Initialises filters
		*
		* @param array $langs
		*/
		protected function load_filters($langs){
			if(!$this->classes) {
				$this->load_type('classes', $langs);
			}
			foreach($langs as $lang) {
				$names = $this->classes[$this->lang];
				$this->filters[$lang][] = array('name' => '-----------', 'value' => false);
				foreach($this->classes[$lang] as $id => $name) {
					$this->filters[$lang][] = array('name' => $name, 'value' => 'class:'.$id);
				}
				
				$this->filters[$lang] = array_merge($this->filters[$lang], array(
					array('name' => '-----------', 'value' => false),
					array('name' => $this->glang('robe', true, $lang), 'value' => 'class:1,4,8,12,15,17,24'), 
					array('name' => $this->glang('medium_robe', true, $lang), 'value' => 'class:6,20'),
					array('name' => $this->glang('light', true, $lang), 'value' => 'class:7,16,18,19,22,23'), 
					array('name' => $this->glang('medium', true, $lang), 'value' => 'class:9,13,14,16,21,24'), 
					array('name' => $this->glang('heavy', true, $lang), 'value' => 'class:2,3,5,10,11,19'), 
					array('name' => '-----------', 'value' => false),
					array('name' => $this->glang('tank', true, $lang), 'value' => 'class:2,3,5,10,11,19'),
					array('name' => $this->glang('melee', true, $lang), 'value' => 'class:9,13,14,21,22,23'),
					array('name' => $this->glang('range', true, $lang), 'value' => 'class:4,7,12,16,17,18'),
					array('name' => $this->glang('support', true, $lang), 'value' => 'class:1,6,8,15,20,24'),
					array('name' => $this->glang('healer', true, $lang), 'value' => 'class:1,6,8,15,20,24'),
				));
				
			}
		}

		/**
		* Returns Information to change the game
		*
		* @param bool $install
		* @return array
		*/
		public function install($install=false){
			$this->game->resetEvents();
			
			$arrEventIDs = array();
			$arrEventIDs[] = $this->game->addEvent($this->glang('event1'), 0, "altdorfsewers.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('event2'), 0, "bastionstair.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('event3'), 0, "bilerotburrow.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('event4'), 0, "bloodwrought.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('event5'), 0, "lostvale.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('event6'), 0, "mountgunbad.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('event7'), 0, "sacellum.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('event8'), 0, "sigmarcrypts.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('event9'), 0, "warpblade.png");
			
			$this->game->resetMultiDKPPools();
			$this->game->resetItempools();
			$intItempoolID = $this->game->addItempool("Default", "Default Itempool");
			
			$this->game->addMultiDKPPool("Default", "Default MultiDKPPool", $arrEventIDs, array($intItempoolID));

        }
	}
}
?>