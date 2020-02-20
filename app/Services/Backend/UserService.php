<?php

namespace App\Services\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class UserService
{
    /**
     * Get all of users
     *
     * @return Model
     */
    public function getAllUsers()
    {   
        return User::paginate(User::ITEMS_PER_PAGE);
    }

    /**
     * Create new users
     *
     * @param \Illuminate\Http\Request  $request
     * @return void
     */
    public function createUsers($request)
    {   
        $user =  new User;
        $user->role_id = $request->role_id;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->is_active = User::ACTIVE;
        $user->save();
    }

    /**
     * Show users
     *
     * @param int $id User id
     * @return Model
     */
    public function showUsers($id)
    {   
        return User::find($id);
    }

    /**
     * Edit users
     *
     * @param int $id User id
     * @return new Model
     */
    public function getDataByUserId($id)
    {   
        return User::find($id);
    }

    /**
     * Update users
     *
     * @param \Illuminate\Http\Request  $request
     * @param int $id User id
     * @return void
     */
    public function updateUser($request, $id)
    {   
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->is_active = $request->is_active;
        $user->save();
    }

    /**
     * Destroy users
     *
     * @param int $id User id
     * @return void
     */
    public function destroyUser($id)
    {   
        $user = User::find($id);
        $user->delete();
    }
}
