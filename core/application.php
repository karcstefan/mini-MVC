	<?php

class Application
{
	public static function Boot($theme)
	{
		define("ACTIVE_THEME", (is_dir("theme/".$theme) ? $theme : "default") );
		//echo $_SERVER['REQUEST_URI'];
		self::set_paths();
		self::Route();
		//echo self::Parseurl(1);
	}

	public static function Parseurl($segment)
	{
		$piece = explode("/", $_SERVER['REQUEST_URI']);
		return (sizeof($piece) > 1 ? $piece[$segment] : null);
	}

	public static function Shutdown()
	{
		//echo "Shutdown";
	}

	public static function set_paths()
	{
		define("SITE_URL", "http://".$_SERVER['HTTP_HOST']."/");
		define("PREFIX", "test_");
	}

	public static function Route()
	{

		if(self::Parseurl(1) != null)
		{
			//TEST1 TEst2
			if(file_exists("core/controllers/controller_".self::Parseurl(1).".php"))
			{
				require("core/controllers/controller_".self::Parseurl(1).".php");
				$test = self::Parseurl(1);

				$controller = new $test;
			}
			else
			{
				echo "404";
				//404
			}
			//$controller = new self::Parseurl(1);
		}
		else
		{
			require("core/controllers/controller_index.php");
			$controller = new Index;
		}

	}
}


?>
