<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class MainController extends Controller
{
    public function index(Request $request){
        $title = 'Users';
        $counter = '';
        $users = User::orderBy('id')->get();
        $cookie2 = $request->cookie('page_counter');

        if(is_null($cookie2)){
            $counter = 1;
        } 
        else{
            $counter = (int)$cookie2 + 1;
            echo $counter;
        }
        return response('')->cookie('page_counter', $counter);
        return view('main.index', compact('title', 'users','counter','cookie2'));
        
    }
    public function index1(Request $request){
            $cookie2 = $request->cookie('page_counter');

        if(is_null($cookie2)){
            $counter = 1;
        } 
        else{
            $counter = (int)$cookie2 + 1;
            echo $counter;
        }
        return response('')->cookie('page_counter', $counter);
        return view('main', compact('counter'));
    }
}
