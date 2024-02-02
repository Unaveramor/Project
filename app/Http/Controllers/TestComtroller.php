<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestComtroller extends Controller
{
    public function index(){
        return view('test.test');
    }

    public function one(Request $request){
        $day = $request->input('day');
        $dayOfWeek = '';
        if ($day == 1) {
            $dayOfWeek = 'Понедельник';
        } elseif ($day == 2) {
            $dayOfWeek = 'Вторник';
        } elseif ($day == 3) {
            $dayOfWeek = 'Среда';
        } elseif ($day == 4) {
            $dayOfWeek = 'Четверг';
        } elseif ($day == 5) {
            $dayOfWeek = 'Пятница';
        } elseif ($day == 6) {
            $dayOfWeek = 'Суббота';
        } elseif ($day == 7) {
            $dayOfWeek = 'Воскресенье';
        }
    
        return view('test.test', ['dayOfWeek' => $dayOfWeek], compact('day'));
    }

    public function index3(){
        return view('test.test');
    }

    public function fore(Request $request){
        $day = $request->input('day');
        $dayOfWeek = '';
        if ($day == 1) {
            $dayOfWeek = 'Понедельник';
        } elseif ($day == 2) {
            $dayOfWeek = 'Вторник';
        } elseif ($day == 3) {
            $dayOfWeek = 'Среда';
        } elseif ($day == 4) {
            $dayOfWeek = 'Четверг';
        } elseif ($day == 5) {
            $dayOfWeek = 'Пятница';
        } elseif ($day == 6) {
            $dayOfWeek = 'Суббота';
        } elseif ($day == 7) {
            $dayOfWeek = 'Воскресенье';
        }
    
        return view('test.test2', ['dayOfWeek' => $dayOfWeek], compact('day'));
    }

    public function index1(){
        return view('test.stop');
    }
    public function two(Request $request){
        $dayOfWeek = $request->input('day');

    
        return view('test.stop', compact('dayOfWeek'));
    }

    public function index2(){
        return view('test.stop2');
    }
    public function three(Request $request){
        $month = $request->input('month');

    
        return view('test.stop2', compact('month'));
    }

    public function index4(){
        return view('test.stop3');
    }
    public function five(Request $request){
        $agee = $request->input('age');
        return view('test.stop3', compact('agee'));
    }

}
// "1" => "понедельник",
// "2" => "вторник",
// "3" => "среда",
// "4" => "четверк",
// "5" => "пятница",
// "6" => "суббота",
// "7" => "воскресенье",