<?php

class About extends Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->view->title = "About";
		$this->view->secondary = "About me";
		$this->view->render("about");
	}
}

?>
