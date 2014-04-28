--TEST--
Test service is called as callback, and only once
--SKIPIF--
<?php if (!extension_loaded("sensiolabs_pimple")) print "skip"; ?>
--FILE--
<?php 
$p = new Pimple();
$p['foo'] = function($arg) use ($p) { var_dump($p === $arg); };
$a = $p['foo'];
$b = $p['foo']; /* should return not calling the callback */
?>
--EXPECTF--
bool(true)