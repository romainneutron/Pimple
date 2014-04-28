--TEST--
Test protect()
--SKIPIF--
<?php if (!extension_loaded("sensiolabs_pimple")) print "skip"; ?>
--FILE--
<?php

$p = new Pimple();
$f = function () { return 'foo'; };
$p['foo'] = $f;

$p->protect($f);

var_dump($p['foo']);
--EXPECTF--
object(Closure)#%i (0) {
}