<?php

namespace App\Http\Controllers\User\Controllers;

use App\CommandBus\Command;
use App\CommandBus\CommandBus;

class AbstractController extends \Illuminate\Routing\Controller
{
    private $dispatcher;

    public function __construct(CommandBus $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function dispatch(Command $command)
    {
        return $this->dispatcher->execute($command);
    }
}

