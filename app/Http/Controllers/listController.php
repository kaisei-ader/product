<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class listController extends Controller
{
    public function index() {

        $products = DB::select('select * from items');
        $data = ['msg' => 'ハロー', 'products' => $products];
        return view('productlist',$data);
    }
}
