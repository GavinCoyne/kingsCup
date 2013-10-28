<?php

class Rules extends Master {
	   
   public function index()
   {
		//get the view into the content var!
		ob_start();
		//vars here are sent to the view file called in the include.
		$var = array('first'=>'A Test for the comp3540!', 'second item'=>'I rock');
		include './view/rules.php';
		$this->content = ob_get_clean();
		//End of the view creating
		
		
		$this->title = "Kings Cup - Rule Generator";
		$this->render();
   }
   
   public function doStuff()
   {
		
		
		$this->content = "doStuff";
		$this->title = "DOSTUFF!";
		$this->render();
   }
   
   
	
}