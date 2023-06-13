<?php

namespace App\Http\Controllers\User\Commands;

use App\Models\Commands\UserBaseCommand;

class RegisterUser extends UserBaseCommand  implements \App\CommandBus\Command
{
    public function __construct($params)
    {
        parent::__construct($params);
    }
}