<?php

/**
 * First item Controller! Show the first quote in the database
 * 
 * controllers/First.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

	// This function displays the first quote in our database
    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        
		// get the first record!
		$record = $this->quotes->first();
		$this->data = array_merge($this->data, $record);
		
        $this->render();
    }
	
	// This function displays the Bob Monkhouse quote
	function zzz()
	{
		$this->data['pagebody'] = 'justone';    // this is the view we want shown
        
		// get the sleep record!
		$record = $this->quotes->get(1);
		$this->data = array_merge($this->data, $record);
		
        $this->render();
	}

	// This function displays any record specified by id $num
	// but is really used to get record 3, the Mark Russell quote
	function gimme( $num )
	{
		$this->data['pagebody'] = 'justone';    // this is the view we want shown
        
		// gets a record specified by id $num!
		$record = $this->quotes->get( $num );
		$this->data = array_merge($this->data, $record);
		
        $this->render();
	}
}

/* End of file First.php */
/* Location: application/controllers/First.php */