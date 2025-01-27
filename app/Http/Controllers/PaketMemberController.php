<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketMemberController extends Controller
{
    public function index(){
        return view('paket.index');

    }
}
