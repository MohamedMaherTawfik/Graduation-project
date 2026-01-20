<?php

namespace App\Http\Controllers\Api\V1\admin;

use App\Http\Controllers\concerns\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    use ApiResponse;

    public function index()
    {
        $users = User::where('role', '!=', 'admin')->count();
        return view('admin.index');
    }

    public function users()
    {
        return view('admin.users');
    }

    public function contacts()
    {
        return view('admin.contacts');
    }



    public function getAllUsers()
    {
        $users = User::select(['id', 'name', 'email', 'created_at', 'role'])->where('role', '!=', 'admin')->get();
        if ($users->isEmpty()) {
            return $this->success([], 'No users found');
        }
        return $this->success($users);
    }

    public function deleteUser(User $user)
    {
        if ($user->role == 'admin') {
            return $this->error('Cannot delete admin user', 403);
        }
        if ($user->id === auth()->id()) {
            return $this->error('You cannot delete your own account', 403);
        }
        $user->delete();
        return $this->success(null, 'User deleted successfully');
    }


}