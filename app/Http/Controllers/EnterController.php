<?php

namespace App\Http\Controllers;

use App\Models\Rubric;
use App\Models\User;
use App\Models\Us;
use Illuminate\Http\Request;

class EnterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function start(){
        $title = 'log';
        $rubrics2 = Rubric::pluck('title', 'id')->all();
        return view('enter.enter',compact('title', 'rubrics2'));
    }

    public function end(Request $request){

        // $date = $request->validate
        $this->validate($request, [
            'name' => ['required','string','alpha'],
            'email' => ['required','string','email','unique:us,email'],
            'nomber' => ['required','integer','min:1000000000','max:999999999999'],
            // 'password' => ['required','integer'],
        ],
        [
            'name.required' => '1не заполнен',
            'name.string' => 'не string',
            'name.alpha' => 'не английский A',
            'email.required' => '2не заполнен',
            'email.string' => 'не string',
            'email.email' => 'не мэил',
            'nomber.required' => '3не заполнен',
            'nomber.integer' => 'не целые числа',
            'nomber.min:1000000000' => 'меньше 10',
            'nomber.max:999999999999' => 'больше 12',
            // 'password.required' => '4не заполнен',
            // 'password.integer' => 'не  числа',
        ]);

        Us::create($request->all());
        // Us::create([
        //     "name"=>$date["name"],
        //     "email"=>$date["email"],
        //     "nomber"=>$date["nomber"],
        //     "password"=>$date["password"],
        // ]);

        return redirect()->route('home');
    }
}

// 'name.required' => 'не заполнен',
// 'name.A-Za-z' => 'не английский',
// 'email.required' => 'не заполнен',
// 'email.string' => 'не string',
// 'email.email' => 'не мэил',
// 'nomber.required' => 'не заполнен',
// 'nomber.integer' => 'не целые числа',
// 'nomber.min:10' => 'меньше 10',
// 'nomber.max:11' => 'больше 12',
// 'password.required' => 'не заполнен',
// 'password.integer' => 'не целые числа',

// 'name.required' => 'die1',
// 'name.A-Za-z' => 'die2',
// 'email.required' => 'die3',
// 'email.string' => 'die4',
// 'email.email' => 'die5',
// 'nomber.required' => 'die4',
// 'nomber.integer' => 'die5',
// 'nomber.min:10' => 'die6',
// 'nomber.max:11' => 'die7',
// 'password.required' => 'die8',
// 'password.integer' => 'die9',