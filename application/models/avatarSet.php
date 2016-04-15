<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of avatarSet
 *
 * @author Anderson
 */
class avatarSet extends MY_Model {
    
    public function __construct() {
        parent::__construct();
    }
	
		public function avatarUpdate($player, $image){
		$query = $this->db->query('UPDATE players SET avatar = "'.$image.'"WHERE Player ="'.$player.'"');
		echo 'Successful upload!';
		}
	}