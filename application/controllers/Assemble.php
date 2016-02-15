<?php

/* 
 * application/controllers/Assemble_page.php
 */

class Assemble extends CI_controller
{
    function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
		$this->load->view('_MasterpageHeader');
		$this->load->view('_MasterpageNavBar');
		$this->playerCards();
    }

    private function playerCards() {
        $this->load->model('PlayerCards');

        //try to call the query in the model to initialize it
        $query = $this->PlayerCards->playerCollections();
        $playerCards = array();
        foreach ($query as $row) {
            $playerCards[] = (array) $row;
        }
        
        $table = array();
        foreach ($playerCards as $index => $row) {
            $new = $row;
            switch($index % 2== 0){
                case TRUE:
                    $new['tableClass'] = "collection1";
                    break;
                case FALSE:
                    $new['tableClass'] = "collection2";
                    break;
            }
            $table[] = $new;
        }
        
        $players['collectionTable'] = $table;

        $this->data['playerCards'] = $this->parser->parse('_collectionTable', $players, true);

        $this->parser->parse('assemble_page', $this->data);
    }
}

    /* End of file Assemble_page.php */
    /* Location: application/controllers/Assemble_page.php */
?>
