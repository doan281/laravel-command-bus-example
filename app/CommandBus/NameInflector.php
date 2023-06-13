<?php
declare(strict_types=1);

namespace App\CommandBus;

class NameInflector implements Inflector
{
    /**
     * Find a Handler for a Command
     *
     * @param Command $command
     * @return string
     */
    public function inflect(Command $command)
    {
        return get_class($command) . 'Handler';
    }
}
