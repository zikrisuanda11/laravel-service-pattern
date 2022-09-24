<?php

namespace App\Services\User;

use App\Http\Requests\UserRequest;
use LaravelEasyRepository\BaseService;

interface UserService extends BaseService{

    public function register(UserRequest $data);

    public function login(UserRequest $data);

    public function logout(UserRequest $data, $id);
}
