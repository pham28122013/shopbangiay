<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Services\Backend\UserService;
use Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    /**
     * @var UserService
     */
    private $userService;

    /**
     * initialize the function __construct
     * 
     */
    public function __construct(UserService $userservice)
    {
        $this->userService = $userservice;
    }

    /**
     * list for the user.
     *
     * @return view
     */
    public function index()
    {
        $users = $this->userService->getAllUsers();
        return view('admin.users.list',['users' => $users]);
    }

    /**
     * Create for the user.
     *
     * @return view
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store for the user.
     *
     * @param \Illuminate\Http\Request  $request
     * @return route
     */
    public function store(UserRequest $request)
    {
        $user = $this->userService->createUsers($request);
        return redirect()->route('users.index')->with('success','Create user successfully');
    }

    /**
     * Show for the user.
     *
     * @param int $id User id
     * @return view
     */
    public function show($id)
    {
        $user = $this->userService->showUsers($id);
        return view('admin.users.show', ['user' => $user]);
    }
    

     /**
     * Edit for the user.
     *
     * @param int $id User id
     * @return view
     */
    public function edit($id)
    {
        $user = $this->userService->getDataByUserId($id);
        return view('admin.users.edit', ['user' => $user]);
    }

    /**
     * Update for the user.
     *
     * @param \Illuminate\Http\Request  $request
     * @param int $id User id
     * @return route
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $user = $this->userService->updateUser($request, $id);
        return redirect()->route('users.index')->with('success','Update user successfully');
    }

     /**
     * Destroy for the user.
     *
     * @param int $id User id
     * @return route
     */
    public function destroy($id)
    {
        $user = $this->userService->destroyUser($id);
        return redirect()->route('users.index')->with('success','Destroy user successfully');
    }
    
    /**
     * Login to the admin page.
     *
     * @return route
     */
}
