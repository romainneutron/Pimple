--TEST--
Test service callback throwing an exception
--SKIPIF--
<?php if (!extension_loaded("sensiolabs_pimple")) print "skip"; ?>
--FILE--
<?php
class CallBackException extends RuntimeException { }

$p = new Pimple();
$p['foo'] = function () { throw new CallBackException; };
try {
	echo $p['foo'] . "\n";
	echo "should not come here";
} catch (CallBackException $e) {
	echo "all right!";
}
?>
--EXPECTF--
all right!