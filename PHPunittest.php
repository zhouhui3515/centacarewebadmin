<?php

require_once('simpletest/autorun.php');
require_once('simpletest/web_tester.php');
SimpleTest::prefer(new TextReporter());



class TestOfLogging extends WebTestCase {
	
	
	function testIndexx(){
		$this->get('https://drwatson.uqcloud.net/final/index.php');
		$name ="user";
		$value = "admin";
		$this->assertCookie($name, $value);
		$submit= "Logn";
		$this->clickSubmit($submit);
		
	}
	
	
	
	
}



class Log {
    var $path;
        
    function __construct($path) {
        $this->path = $path;
    }
        
    function message($message) {
        $file = fopen($this->path, "a");
        fwrite($file, $message . "\n");
        fclose($file);
    }
}
?>