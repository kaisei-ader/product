<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class listController extends Controller
{
    public function index() {
        $products = DB::table('items')->paginate(5);
        $data = ['msg' => 'ハロー', 'products' => $products];
        return view('productlist',$data);
    }
}
