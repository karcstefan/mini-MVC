<?php

class Oopatterns extends Controller
{
	public function __construct()
	{
		parent::__construct();
		///localhost/Oopatterns/singleton
		$this->view->title = "Object-Oriented Design Patterns";

		if (method_exists($this, strtolower(Application::Parseurl(2))))
		{
			$this->{strtolower(Application::Parseurl(2))}();
		}
		else
		{
			echo "404";
		}

	}

	private function traits()
	{
		$this->view->secondary = "Traits";
		$this->view->render("traitsasd");
	}

	private function singleton()
	{
			$this->view->secondary = "Singleton";
			$this->view->render("singleton");
	}

	private function factory()
	{
		$this->view->secondary = "Factory Pattern";
		$this->view->render("factory");
	}

	private function adapter()
	{
		$this->view->secondary = "Adapter Pattern";
		$this->view->render("adapter");
	}

	private function polymorphism()
	{
		$this->view->secondary = "Polymorphism";
		$this->view->render("polymorphism");
	}

	private function lawofdemeter()
	{
		$this->view->secondary = "Law Of Demeter";
		$this->view->render("lawofdemeter");
	}
}

?>
