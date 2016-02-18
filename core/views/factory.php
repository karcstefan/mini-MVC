<center><img src="<?php echo SITE_URL; ?>/assets/img/IC173650.gif" /></center>
<br />
<p>Factory pattern is one of most used design pattern in Java. This type of design pattern comes under creational pattern as this pattern provides one of the best ways to create an object.

In Factory pattern, we create object without exposing the creation logic to the client and refer to newly created object using a common interface.</p>
<pre>
  <code class="language-php">
  class TV
  {
  	public function __construct($manufacturer, $type)
  	{
  		$this->_manufacturer = $manufacturer;
  		$this->_type = $type;
  	}

  	public function getManufacturer() { return $this->_manufacturer; }
  	public function getType() { return $this->_type; }
  }
  class TVFactory
  {
  	public static function create($manufacturer, $type)
  	{
  		return new TV($manufacturer, $type);
  	}
  }
  $modernTV = TVFactory::create("LG", "LCD");
  echo "A new TV has been produced by ".$modernTV->getManufacturer()." with ".$modernTV->getType()." display";

  </code>
</pre>

<pre>
  Output:
  <code><b>A new TV has been produced by LG with LCD display</b></code>
</pre>
