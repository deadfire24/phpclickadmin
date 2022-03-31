<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Objects\ClickhouseDB;
use App\Models\Objects\Credentials;

class Authentification extends Controller
{
    //


    public function login_view(Request $request){


        return view("auth.login");
    }


    public function login_post(Request $request){
        $credentials = new Credentials(0, $request->username, $request->password);
        
        $DB = new ClickhouseDB($credentials);
        if(!$DB->isConnected()){
            $request->session()->flash('error', 'Invalid credentials');
            return redirect()->route("auth.login");
        } else {
            $request->session()->put('credentials', $credentials);
            return redirect()->route("dashboard");
        }

        
    }
}
