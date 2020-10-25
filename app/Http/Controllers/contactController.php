<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function showContact() {

        return view('contact');
    }

    public function confirm(Request $request)
    {
    }

    public function send(Request $request)
    {
    }
}
