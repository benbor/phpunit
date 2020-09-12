--TEST--
Configuration migration from PHPUnit 8.5 format works
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--migrate-configuration';

chdir(sys_get_temp_dir());
copy(__DIR__ . '/migration-from-85/phpunit-8.5.xml', 'phpunit.xml');

require __DIR__ . '/../../bootstrap.php';

PHPUnit\TextUI\Command::main(false);

print file_get_contents(sys_get_temp_dir() . '/phpunit.xml');
print file_get_contents(sys_get_temp_dir() . '/phpunit.xml.bak');
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

Created backup:         %sphpunit.xml.bak
Migrated configuration: %sphpunit.xml