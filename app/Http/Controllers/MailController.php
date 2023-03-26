<?php

namespace App\Http\Controllers;
 

use Illuminate\Http\Request;
use App\Mail\test1


class MailController extends Controller
{
 public function test(){
    // mail::to('elgamaln7@gmail.com')->send(new App\Mail\test1);
    // dd('ok');

    return 'test';
}
}

