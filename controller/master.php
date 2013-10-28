<?php

class Master {

	public $content;
	public $title;
	
	public function render()
	{
		include "./view/template.php";
	}
	
	public function notFound()
	{
		$this->content = "Action not found.";
		$this->render();
	}

}