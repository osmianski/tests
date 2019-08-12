<?php

namespace Osmianski\Tests;

/**
 * @property $magic
 */
class LazyProperties
{
    protected $foo;

    public function getFoo() {
        if ($this->foo === null) {
            $this->foo = 'foo';
        }

        return $this->foo;
    }

    protected $bar = 'bar';

    public function getBar() {
        return $this->bar;
    }

    public function __get($property) {
        switch ($property) {
            case 'magic': return $this->magic = 'magic';
        }
    }
}