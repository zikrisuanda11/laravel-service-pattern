<?php

namespace App\Repositories\User;

use App\Http\Requests\UserRequest;
use LaravelEasyRepository\Repository;

interface UserRepository extends Repository{
    
    public function register(UserRequest $data);

    public function login(UserRequest $data);

    public function logout(UserRequest $data, $id);
    
}
