<?php

/**
 * Bingo page. 
 * 
 * controllers/bingo.php
 *
 * ------------------------------------------------------------------------
 */
class Bingo extends Application {

	function __construct()
	{
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['pagebody'] = 'justone';	// this is the view we want shown
		
                $record = $this->quotes->get(5);
                $this->data = array_merge($this->data, $record);
                
		$this->render();
	}
}

/* End of file Bingo.php */
/* Location: application/controllers/Bingo.php */