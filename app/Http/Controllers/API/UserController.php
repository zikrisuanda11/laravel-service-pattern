<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Services\User\UserService;
use App\Http\Controllers\Controller;
use LaravelEasyRepository\BaseService;

class UserController extends Controller 
{
    protected $userRepository;

    public function __construct(UserService $userRepository)
    {
      $this->userRepository = $userRepository;
    }

    public function register(UserRequest $request)
    {
        $data = $this->userRepository->register($request);
        return response()->json([
            'message' => 'success register user',
            'data' => $data
        ]);
    }

    public function login(UserRequest $request)
    {
        
    }

    public function logout(UserRequest $request, $id)
    {
        
    }
}
