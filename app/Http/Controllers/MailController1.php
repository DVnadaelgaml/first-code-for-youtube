<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\test1;
// use App\Http\Controllers\mail;
use Illuminate\Support\Facades\Mail;


class MailController1 extends Controller
{
    public  function test(){

        Mail::to('elgamaln7@yahoo.com')->send(new test1);
         dd("ok");
        // return 'test';
    }
}
