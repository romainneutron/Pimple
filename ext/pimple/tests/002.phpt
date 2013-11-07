--TEST--
Test for constructor
--SKIPIF--
<?php if (!extension_loaded("sensiolabs_pimple")) print "skip"; ?>
--FILE--
<?php 
$p = new Pimple();
var_dump($p[42]);

$p = new Pimple(array(42=>'foo'));
var_dump($p[42]);
?>
--EXPECT--
NULL
string(3) "foo"
