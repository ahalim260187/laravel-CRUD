<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index()
    {
        // creating data tho the blog table
        $blog = new Blog();
        $blog->title = 'Tes title';
        $blog->description = 'Descritpion Blog';
        $blog->author = 'Meta Testing';
        $blog->status = 1;
        $blog->save();
        dd('sukses create data');
    }
}
