<?php

/**
 * Welcome Controller for the last folder! Shows the last quote in the database
 * 
 * controllers/last/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

	// This function displays the last record in our database!
    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        
		// get the last record!
		$record = $this->quotes->last();
		$this->data = array_merge($this->data, $record);
		
        $this->render();
    }

}

/* End of file Welcome.php */
/* Location: application/controllers/last/Welcome.php */