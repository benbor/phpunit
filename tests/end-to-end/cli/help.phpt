--TEST--
phpunit
--ARGS--
--no-configuration
--FILE--
<?php declare(strict_types=1);
require __DIR__ . '/../../bootstrap.php';
PHPUnit\TextUI\Application::main();
--EXPECTF_EXTERNAL--
_files/output-cli-usage.txt
