<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploudController extends Controller
{
    function index()
    {
        return view('file');
    }
    function store(Request $request)
    {
        // $file = Storage::disk('local')->put('/imgs', $request->file('file'));
        $file = $request->file('file')->store('/imgs', 'local');
        dd($file);
    }
}
