<?php

/**
 * Bingo Controller! Show the Socrates and Asimov quotes from the database
 * 
 * controllers/Bingo.php
 *
 * ------------------------------------------------------------------------
 */
class Bingo extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

	// This function displays the Socrates quote
    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        
		// get the fifth record and add to this->data, to be used by justone
		$record = $this->quotes->get(5);
		$this->data = array_merge($this->data, $record);
		
        $this->render();
    }
	
	// This function displays the Isaac Asimov quote
	function wisdom()
	{
		$this->data['pagebody'] = 'justone';    // this is the view we want shown
        
		// get the sixth record and add to this->data, to be used by justone
		$record = $this->quotes->get(6);
		$this->data = array_merge($this->data, $record);
		
        $this->render();
	}
}

/* End of file Bingo.php */
/* Location: application/controllers/Bingo.php */