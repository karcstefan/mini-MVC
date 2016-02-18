<center><img height="200" src="<?php echo SITE_URL; ?>/assets/img/Singleton-Design-Pattern.jpg" /></center>
<br />

<p>The singleton pattern is one of the simplest design patterns: it involves only one class which is responsible to instantiate itself, to make sure it creates not more than one instance; in the same time it provides a global point of access to that instance. In this case the same instance can be used from everywhere, being impossible to invoke directly the constructor each time.</p>

<pre>
  <code class="language-php">
    class Singleton
    {
    	private static $instance;

    	public static function getInstance()
    	{
    		if(!static::$instance)
    			static::$instance = new static();

    		return static::$instance;
    	}

    	private function __construct() {}
    	public function testSingleton()
    	{
    		return "It works";
    	}
    }
    echo Singleton::getInstance()->testSingleton();
  </code>

</pre>
<pre>
    Output:
    <code>
      <b>It works</b>
    </code>
</pre>
