<?php
declare(strict_types=1);

namespace App\CommandBus;

interface Container
{
    /**
     * Return a new instance of an object
     *
     * @param string $class
     * @return mixed
     */
    public function make($class);
}
