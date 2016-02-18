<center><img src="<?php echo SITE_URL; ?>/assets/img/demeter.png" /></center>
<br />
<p>
  The Law of Demeter (LoD) or principle of least knowledge is a design guideline for developing software, particularly object-oriented programs. In its general form, the LoD is a specific case of loose coupling. The guideline was proposed at Northeastern University towards the end of 1987, and can be succinctly summarized in each of the following ways:[1]

  Each unit should have only limited knowledge about other units: only units "closely" related to the current unit.
  Each unit should only talk to its friends; don't talk to strangers.
  Only talk to your immediate friends.
<p>
  <pre>
  <code class="language-php">

class Advertisment
{
	private $_username;
	private $_content;

	public function __construct($username, $content = null)
	{
		$this->_username = $username;
		$this->_content = $content;
	}

	public function getUsername() { return $this->_username; }
	public function getContent() { return $this->_content; }
	public function getType() { return $this->_content ? $this->_content->getType() : ""; }
	public function getPrice() { return $this->_content ? $this->_content->getPrice() : ""; }
	public function getImage() { return ( $this->_content && $this->_content->getImage() ) ? $this->_content->getImage()->getLocation() : ""; }
}
class AdContent
{
	public function __construct($type, $price, $image = null)
	{
		$this->_type = $type;
		$this->_price = $price;
		$this->_image = $image;
	}

	public function getType() { return $this->_type; }
	public function getPrice() { return $this->_price; }
	public function getImage() { return $this->_image; }
}
class AdImage
{
	public function __construct($location)
	{
		$this->_location = $location;
	}

	public function getLocation() { return $this->_location; }
}
$ad = new Advertisment("Username", new AdContent("cars", "1500", new AdImage("somewhere")));
echo "Advertisment posted by ".$ad->getUsername()." in ".$ad->getType()."<br />";
echo "Image Location: ".$ad->getImage();
  </code>
</pre>

<pre>
  Output:
  <code><b>Advertisment posted by Username in cars
Image Location: somewhere</b></code>
</pre>
