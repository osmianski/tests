<?php

use Osmianski\Tests\LazyProperties;

include __DIR__ . '/../vendor/autoload.php';

$object = new LazyProperties();
$count = 1000;

$startedAt = microtime(true);
for ($i = 0; $i < $count; $i++) {
    $value = $object->getFoo();
}
$elapsed = (microtime(true) - $startedAt) * 1000;
echo "'foo' property accessed {$count} times in {$elapsed}ms\n";

$startedAt = microtime(true);
for ($i = 0; $i < $count; $i++) {
    $value = $object->getBar();
}
$elapsed = (microtime(true) - $startedAt) * 1000;
echo "'bar' property accessed {$count} times in {$elapsed}ms\n";

$startedAt = microtime(true);
for ($i = 0; $i < $count; $i++) {
    $value = $object->magic;
}
$elapsed = (microtime(true) - $startedAt) * 1000;
echo "'magic' property accessed {$count} times in {$elapsed}ms\n";
