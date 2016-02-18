<?php

class View
{
	var $title = "MVC on a budget";
	var $secondary = "Placeholder";

	public function render($file)
	{
		if(file_exists("core/views/".$file.".php"))
		{
			// require("theme/".ACTIVE_THEME."/header.php");
			$fileContent = file_get_contents("theme/".ACTIVE_THEME."/header.php");
			$fileContent = str_replace("%title%", $this->title, $fileContent);
			$fileContent = str_replace("%secondary%", $this->secondary, $fileContent);
			$fileContent = str_replace("%SITE_URL%", "MVC on a budget", $fileContent);
			eval("?>".$fileContent);  // Unsafe.. Working on an alternative
			require("core/views/".$file.".php");
			require("theme/".ACTIVE_THEME."/footer.php");
		}
	}
}

?>
