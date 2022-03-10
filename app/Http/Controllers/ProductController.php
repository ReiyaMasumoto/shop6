<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


  
class ProductController extends Controller
{

    public function showList()
    {
        $products = Product::all();

        return view('shop.list',
        ['products'=> $products]);
    }



    public function showCreate() {
        return view('shop.form');
    }

    public function exeStore(Request $request)
    {
        $inputs = $request->all();
        $filename = $request->picture->getClientOriginalName();
        $picture = $request->picture->storeAs('',$filename,'public');
        $user = new User();
        $user->create(['picture'=>$picture]);
        // return view('')
        Product::create();
        \Session::flash('err_msg', '商品を登録しました');
        return redirect(route('items'));
    }


}
