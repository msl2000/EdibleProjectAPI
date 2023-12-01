<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Retrieve all our users
    public function index() {
        return User::find(1);
    }

    //create a new user
    public function store() {
        User::create([
            'username' => 'johnuser',
            'password' => 'test01',
            'first_name' => 'John'
        ]);
    }
}
