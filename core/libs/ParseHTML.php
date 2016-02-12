<?php

class ParseHTML
{
	var $params = array();

	public function registerParam($param, $value)
	{
		$this->param[$param] = $value;
	}

	public function registerFile($file)
	{
		$this->output($this->parse($file));
	}


	private function parse($file)
	{
		$contents = file_get_contents($file."php")

		foreach($this->$params as $key => $value)
		{
			$contents = str_replace($key, $value, $contents);
		}

		return $contents;
	}

	public function output($text)
	{
		$text = mysql_real_escape_string($text);
		echo eval("?>".$text);
	}
}

?>
