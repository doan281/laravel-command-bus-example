<?php

namespace App\Repositories;

use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserRepository
{

    /**
     * Hàm lấy ds
     *
     * @param $params
     * @return User[]|\Illuminate\Database\Eloquent\Collection
     */
    public function listing($params)
    {
        $query = User::all();

        return $query;
    }

    /**
     * Hàm xử lý thêm mới
     *
     * @param $params
     * @return User|false
     */
    public function store($params)
    {
        $name = ($params->name()) ? $params->name() : null;
        $email = ($params->email()) ? $params->email() : null;
        $password = ($params->password()) ? Hash::make($params->password()) : null;

        if ($name && $email && $password) {
            $user = new User();
            $user->name = $name;
            $user->email = $email;
            $user->password = $password;
            $user->save();
            return $user;
        }

        return false;
    }

    /**
     * Hàm xử lý cập nhật
     *
     * @param $params
     * @return false
     */
    public function update($params)
    {
        $id = ($params->id() > 0) ? $params->id() : null;
        $name = ($params->name()) ? $params->name() : null;

        if ($id && $name) {
            $user = User::find($id);
            if ($user) {
                $user->name = $name;
                $user->updated_at = Carbon::now(7);
                $user->save();
                return $user;
            }
        }

        return false;
    }

    /**
     * Hàm xử lý xoá
     *
     * @param $params
     * @return bool
     */
    public function delete($params)
    {
        $id = ($params->id() > 0) ? $params->id() : null;

        if ($id > 0) {
            $user = User::find($id);
            if ($user) {
                $user->delete();
                return true;
            }
        }

        return false;
    }
}
