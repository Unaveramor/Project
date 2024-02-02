<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendd(){
        Mail::to('p.k.d.04@mail.ru')->send(new TestMail);
        return view('sendd');
    }
}
