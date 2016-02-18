<center><img src="<?php echo SITE_URL; ?>/assets/img/ObjectAdapter.png" /></center>
<br />
<p>An adapter helps two incompatible interfaces to work together. This is the real world definition for an adapter. Interfaces may be incompatible but the inner functionality should suit the need. The Adapter design pattern allows otherwise incompatible classes to work together by converting the interface of one class into an interface expected by the clients.</p>
<pre>
  <code class="language-php">
    class Shipment
    {
    	public function __construct() {}

    	public function ship($object)
    	{
    		echo $object . " shipped!";
    	}
    }
    interface shipmentAdapter
    {
    	public function ship($object);
    }
    class ebayAdapter implements shipmentAdapter
    {
    	private $_shipment;
    	public function __construct(Shipment $shipment)
    	{
    		$this->_shipment = $shipment;
    	}

    	public function ship($object)
    	{
    		$this->_shipment->ship($object);
    	}
    }
    $transfer = new ebayAdapter(new Shipment);
    $transfer->ship("Cookies");
  </code>
</pre>

<pre>
  Output:
  <code><b>Cookies shipped!</b></code>
</pre>
