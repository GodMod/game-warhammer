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
		public static $shortcuts = array();
		protected $this_game	= 'warhammer';
		protected $types		= array('classes', 'races', 'factions', 'filters', 'roles');
		public $icons			= array('classes', 'classes_big', 'races', 'events', 'roles');
		protected $classes		= array();
		protected $races		= array();
		protected $factions		= array();
		protected $filters		= array();
		public $langs			= array('english', 'german');

		protected $glang		= array();
		protected $lang_file	= array();
		protected $path			= '';
		public $lang			= false;
		public $version	= '2.1';

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
		public function get_OnChangeInfos($install=false){
			//classcolors
			$info['class_color'] = array(
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
            
            //lets do some tweak on the templates dependent on the game
            $info['aq'] = array();
            
            //Do this SQL Query NOT if the Eqdkp is installed -> only @ the first install
            //if($install){            
            
            // Events
            
            array_push($info['aq'], 'INSERT INTO __events (event_id, event_name, event_value, event_added_by, event_updated_by, event_icon) VALUES (50, "'.$this->glang('event1').'", 0.00, "default", NULL, "altdorfsewers.png"); ');
            array_push($info['aq'], 'INSERT INTO __events (event_id, event_name, event_value, event_added_by, event_updated_by, event_icon) VALUES (51, "'.$this->glang('event2').'", 0.00, "default", NULL, "bastionstair.png"); ');
            array_push($info['aq'], 'INSERT INTO __events (event_id, event_name, event_value, event_added_by, event_updated_by, event_icon) VALUES (52, "'.$this->glang('event3').'", 0.00, "default", NULL, "bilerotburrow.png"); ');
            array_push($info['aq'], 'INSERT INTO __events (event_id, event_name, event_value, event_added_by, event_updated_by, event_icon) VALUES (53, "'.$this->glang('event4').'", 0.00, "default", NULL, "bloodwrought.png"); ');
            array_push($info['aq'], 'INSERT INTO __events (event_id, event_name, event_value, event_added_by, event_updated_by, event_icon) VALUES (54, "'.$this->glang('event5').'", 0.00, "default", NULL, "lostvale.png"); ');
            array_push($info['aq'], 'INSERT INTO __events (event_id, event_name, event_value, event_added_by, event_updated_by, event_icon) VALUES (55, "'.$this->glang('event6').'", 0.00, "default", NULL, "mountgunbad.png"); ');
            array_push($info['aq'], 'INSERT INTO __events (event_id, event_name, event_value, event_added_by, event_updated_by, event_icon) VALUES (56, "'.$this->glang('event7').'", 0.00, "default", NULL, "sacellum.png"); ');
            array_push($info['aq'], 'INSERT INTO __events (event_id, event_name, event_value, event_added_by, event_updated_by, event_icon) VALUES (57, "'.$this->glang('event8').'", 0.00, "default", NULL, "sigmarcrypts.png"); ');
            array_push($info['aq'], 'INSERT INTO __events (event_id, event_name, event_value, event_added_by, event_updated_by, event_icon) VALUES (58, "'.$this->glang('event9').'", 0.00, "default", NULL, "warpblade.png"); ');
                        
            //Connect them to the Default-Multidkp-Pool
            
            array_push($info['aq'], 'INSERT INTO __multidkp (multidkp_id, multidkp_name, multidkp_desc) VALUES (2, "default", "Default-Pool");');
            array_push($info['aq'], 'INSERT INTO __multidkp2event (multidkp2event_multi_id, multidkp2event_event_id) VALUES (1,50), (1,51), (1,52), (1,53), (1,54), (1,55), (1,56), (1,57), (1,58);');
            array_push($info['aq'], 'INSERT INTO __itempool (itempool_id, itempool_name, itempool_desc) VALUES (2, "default", "Default itempool");');
            array_push($info['aq'], 'INSERT INTO __multidkp2itempool (multidkp2itempool_itempool_id, multidkp2itempool_multi_id) VALUES (2, 2);');

            //}
            
            return $info;
        }
	}
}
if(version_compare(PHP_VERSION, '5.3.0', '<')) registry::add_const('short_warhammer', warhammer::$shortcuts);
?>