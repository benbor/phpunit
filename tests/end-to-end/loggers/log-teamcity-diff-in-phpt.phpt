--TEST--
phpunit --teamcity  ../../fail/fail-expect.phpt
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = '--teamcity';
$_SERVER['argv'][] = \realpath(__DIR__ . '/../../fail/fail-expect.phpt');

require_once __DIR__ . '/../../bootstrap.php';

PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.


##teamcity[testCount count='1' flowId='%d']

##teamcity[testStarted name='%s' flowId='%d']

##teamcity[testFailed name='%sfail%efail-expect.phpt' message='Failed asserting that two strings are equal.|n--- Expected|n+++ Actual|n@@ @@|n-|'Buzz|'|n+|'Foo|'|n' details='%s' duration='%s' flowId='%s']

##teamcity[testFinished name='%s' duration='%d' flowId='%d']


Time: %s, Memory: %s


FAILURES!
Tests: 1, Assertions: 1, Failures: 1.
