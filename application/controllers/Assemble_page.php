<?php

/* 
 * application/controllers/Assemble_page.php
 */

class Assemble_page extends Ci_controller
{
    function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
		$this->load->view('_MasterpageHeader');
		$this->load->view('_MasterpageNavBar');
		$this->load->view('Assemble_page');
    }
}

    /* End of file Assemble_page.php */
    /* Location: application/controllers/Assemble_page.php */
?>