<?php

namespace App\Http\Controllers\User\Controllers;

use App\CommandBus\CommandBus;
use App\Http\Controllers\User\Commands\DeleteUser;
use App\Http\Controllers\User\Commands\RegisterUser;
use App\Http\Controllers\User\Commands\UpdateUser;
use App\Http\Requests\User\RegisterUserReq;
use App\Http\Requests\User\UpdateUserReq;
use App\Repositories\UserRepository;
use App\User;
use Illuminate\Http\Request;

class UserController extends AbstractController
{
    protected $userRepository;

    public function __construct(CommandBus $dispatcher, UserRepository $userRepository)
    {
        parent::__construct($dispatcher);

        $this->userRepository = $userRepository;
    }

    /**
     * Danh sách user
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $params = [];
        $data['users'] = $this->userRepository->listing($params);

        return view('user.index', $data);
    }

    /**
     * Form tạo user
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        return view('user.create');
    }

    /**
     * Xử lý form tạo user
     *
     * @param RegisterUserReq $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(RegisterUserReq $request)
    {
        $params = $request->all();
        $this->dispatch(new RegisterUser($params));

        return redirect(route('users.index'));
    }

    /**
     * Form edit user
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Request $request)
    {
        $id = $request->input('id');
        $data['user'] = User::find($id);

        return view('user.edit', $data);
    }

    /**
     * Xử lý form update
     *
     * @param UpdateUserReq $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(UpdateUserReq $request)
    {
        $params = $request->all();
        $this->dispatch(new UpdateUser($params));

        return redirect(route('users.index'));
    }

    /**
     * Xử lý delete
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete(Request $request)
    {
        $params = $request->all();
        $result =  $this->dispatch(new DeleteUser($params));

        return redirect(route('users.index'))->with('delete', $result);
    }
}
