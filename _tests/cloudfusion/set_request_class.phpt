--TEST--
CloudFusion - set_request_class

--FILE--
<?php
	// Dependencies
	require_once dirname(__FILE__) . '/../../cloudfusion.class.php';

	/**
	 * You wouldn't normally call this class directly. These methods
	 * are inherited by the service-specific classes.
	 */

	// Custom class to extend RequestCore
	class TestRequestCore extends RequestCore
	{
		public function test_method()
		{
			return true;
		}
	}

	// Instantiate class and set new class
	$f = new CloudFusion();
	$f->set_request_class('TestRequestCore');

	// Test if the value was set
	var_dump($f->request_class);
?>

--EXPECT--
string(15) "TestRequestCore"
