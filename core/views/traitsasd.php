<center><img src="<?php echo SITE_URL; ?>/assets/img/php-traits.jpg" /></center>

<p>Traits are a mechanism for code reuse in single inheritance languages such as PHP. A Trait is intended to reduce some limitations of single inheritance by enabling a developer to reuse sets of methods freely in several independent classes living in different class hierarchies. The semantics of the combination of Traits and classes is defined in a way which reduces complexity, and avoids the typical problems associated with multiple inheritance and Mixins.</p>

<pre>
  <code class="language-php">
    class Base {
        public function sayHello() {
            echo 'Hello ';
        }
    }

    trait SayWorld {
        public function sayHello() {
            parent::sayHello();
            echo 'World!';
        }
    }

    class MyHelloWorld extends Base {
        use SayWorld;
    }

    $o = new MyHelloWorld();
    $o->sayHello();
  </code>
</pre>

<pre>
  Output:
  <code><b>Hello World!</b></code>
</pre>
