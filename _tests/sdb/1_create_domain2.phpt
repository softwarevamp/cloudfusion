--TEST--
AmazonSDB::create_domain curl handle

--FILE--
<?php
	require_once dirname(__FILE__) . '/../../cloudfusion.class.php';
	$sdb = new AmazonSDB();
	$response = $sdb->create_domain('warpshare-unit-test', true);
	var_dump($response);
?>

--EXPECT--
resource(9) of type (curl)