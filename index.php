<?php
error_reporting(E_ALL ^ E_NOTICE);
require("core/application.php");


require("core/classes/controller.php");
require("core/classes/view.php");

//require("core/classes/models.php");

Application::Boot("default");

?>
