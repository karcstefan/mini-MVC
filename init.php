<?php

if(SITE_MODE == "DEVELOPER")
{
	error_reporting(E_ALL ^ E_NOTICE);
}
else
{
	//error_reporting(0);
}
require("core/application.php");


require("core/classes/controller.php");
require("core/classes/view.php");

//require("core/classes/models.php");

Application::Boot("default");
?>
