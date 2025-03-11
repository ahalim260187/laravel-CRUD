<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestingController extends Controller
{
    function index()
    {
        // DB::table('users')->insert([
        //     [
        //         'name' => 'Raffa Testing',
        //         'email' => 'raffates@gmail.com',
        //         'password' => '1234'
        //     ],
        //     [
        //         'name' => 'Jojo Testing',
        //         'email' => 'jojotes@gmail.com',
        //         'password' => '1234'
        //     ]
        // ]);

        $users = DB::table('users')->get();
        return $users;
        // dd('Sukses run Query');
    }
}
