<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectController extends Controller
{
    //

    public function roleRedirection(){
        if(Auth::id())
        {
            $role=Auth()->user()->userrole;
            if($role=='donor'){
                return view('traveller.form');
            }
            elseif($role=='organization'){
                return redirect()->route('organization-home');
            }
            elseif($role=='super_admin'){
                return redirect()->route('super-admin-home');
            }
             
            elseif($role=='user'){
                return redirect()->route('user-home');

             }
        }
    }
}
