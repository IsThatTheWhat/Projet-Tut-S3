<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function contacts(){
        return view('footer.contact');
    }
}
