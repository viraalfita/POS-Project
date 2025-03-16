<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // public function profile($id, $name)
    // {
    //     return view('user.profile', compact('id', 'name'));
    // }

    public function index()
    {
        // $user = UserModel::all();
        // return view('user', ['data' => $user]);

        // $data = [
        //     'username' => 'customer-1',
        //     'nama' => 'Pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 4
        // ];

        // UserModel::insert($data);

        // $user = UserModel::all();
        // return view('user', ['data' => $user]);

        // $data = [
        //     'nama' => 'Pelanggan Pertama',
        // ];

        // UserModel::where('username', 'customer-1')->update($data);

        // $user = UserModel::all();
        // return view('user', ['data' => $user]);

        $data = [
            'level_id' => 2,
            'username' => 'manager_tiga',
            'nama' => 'Manager 3',
            'password' => Hash::make('12345')
        ];

        UserModel::insert($data);

        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
}
