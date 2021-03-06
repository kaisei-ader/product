<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductPost;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function showAddForm() 
    {
              
        return view('newproductadd');
    }

    public function showList()
    {
        $products = DB::table('items')->where('user_id',Auth::id())->paginate(5);
        $data = ['msg' => 'ハロー', 'products' => $products];
        return view('productlist',$data);
    }

    public function edit(Request $request) 
    {
        $item = DB::table('items')->where('id', '=',$request->id)->first();
        return view('edit',['items' => $item]);
    }

    public function update(ProductPost $request,$id)
    {
        $param = [
            'user_id' => Auth::id(),
            'product_name' => $request->input('name'),
            'arrival_source' =>  $request->input('arr'),
            'manufacturer' =>  $request->input('manufacturer'),
            'price' =>  $request->input('price')
           ];
        DB::table('items')->where('id',$request->id)->update($param);
        return redirect('/list');
    }

    public function delete(Request $request)
    {
        DB::table('items')->where('id', $request->id)->delete();

        return redirect('/list');
    }

    public function addConfirm(ProductPost $request)
    {
        $inputs = $request->all();
        return view('confirm',['inputs'=>$inputs]);
    }

    public function addNewProduct(Request $request) 
    {
        if($request->get('back')){
            return redirect('/add')->withInput();
        }

        DB::table('items')->insert([
            [
                'user_id' => Auth::id(),
                'product_name' => $request->input('name'),
                'arrival_source' =>  $request->input('arr'),
                'manufacturer' =>  $request->input('manufacturer'),
                'price' =>  $request->input('price')
            ],
        ]);
        return redirect()->route('product.list');
    }

}
