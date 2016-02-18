<?php

class Index extends Controller
{
	public function __construct()
	{
		parent::__construct();

		if($_SESSION['logged'] == true)
		{
			$this->view->secondary = "Read your messages";
			$this->view->render("read");
		}
		else
		{
			$this->view->secondary = "Register / Login";
			$this->view->render("index");
		}
	}
}

?>
