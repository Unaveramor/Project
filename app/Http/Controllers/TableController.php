<?php
 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        $employees = DB::table('employees')->select('name')->get();
 
        foreach ($employees as $empl) {
            echo $empl->name;
        }
        
    }
}

/*        $employees = DB::table('employees')->select('*')->get();

        return view( ['users' => $employees]);

        //return view('employees', ['employees' => $employees]);*/