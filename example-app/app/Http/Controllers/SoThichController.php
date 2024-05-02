<?php

namespace App\Http\Controllers;

use App\Models\Favorities;

class SoThichController extends Controller
{
    public function index()
    {

        $sothich = Favorities::all(); 

        return view('crud_user.sothich', ['sothich' => $sothich]);

    }
}

