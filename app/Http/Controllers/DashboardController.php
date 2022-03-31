<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Objects\ClickhouseDB;
use PDO;

class DashboardController extends Controller
{
    

    public function view(Request $request){
        $DB=new ClickhouseDB($request->session()->get('credentials'));
        $data = $DB->query("SHOW DATABASES")->fetchAll(PDO::FETCH_ASSOC);

        return view("dashboard", compact('data'));
    }
}
