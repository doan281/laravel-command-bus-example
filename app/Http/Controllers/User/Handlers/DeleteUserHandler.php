<?php

namespace App\Http\Controllers\User\Handlers;

use App\Repositories\UserRepository;
use App\User;

class DeleteUserHandler implements \App\CommandBus\Handler
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle(\App\CommandBus\Command $command)
    {
        return $this->userRepository->delete($command);
    }
}