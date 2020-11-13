<?php

class A {
}

class B extends A {
	public function __construct ($a, $b) {
	   $this -> a = $a;
	   $this -> b = $b;
	}
	 protected $a;
	 protected $b;
}

class C extends B {
	public function __construct($a, $b, $c) {
	   $this -> c = $c;
	   parent::__construct($a, $b);
   }
   protected $c;
}