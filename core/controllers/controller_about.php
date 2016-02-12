<?php 

class About extends Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->view->title = "About us";
		$this->view->secondary = "About Us";
		$this->view->render("about");
	}
}

?>