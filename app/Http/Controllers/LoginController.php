<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function destroy(){
        auth()->logout();
        return redirect('bbs')->with('message','dsasf');
    }

    public function create(){
        return __METHOD__;
    }
}
