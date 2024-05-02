<?php

namespace App\Http\Controllers;

use App\Models\Posts;

class BaiVietController extends Controller
{
    public function index()
    {

        $baiviet = Posts::all(); 

        return view('crud_user.baiviet', ['baiviet' => $baiviet]);

    }
}