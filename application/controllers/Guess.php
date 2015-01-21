<?php

/**
 * Guess Controller! Show the anonymous quote from the database
 * 
 * controllers/Guess.php
 *
 * ------------------------------------------------------------------------
 */
class Guess extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

	// This function displays the anonymous quote
    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        
		// get the fourth record and add to this->data, to be used by justone
		$record = $this->quotes->get(4);
		$this->data = array_merge($this->data, $record);
		
        $this->render();
    }
}

/* End of file Guess.php */
/* Location: application/controllers/Guess.php */