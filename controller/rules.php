<?php

class Rules extends Master {
	
	function __construct() {
		
   }
   
   public function index()
   {
		$this->content = "rules class<br>";
		$this->render();
   }
   
   
   public function doStuff()
   {
		$this->content = "doStuff";
		$this->render();
   }
	
}