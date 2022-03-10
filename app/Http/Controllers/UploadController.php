<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class UploadController extends Controller
{
    public function index(){
        return view('index');
    }

    public function store(Request $request)
    {
        $filename = $request->picture->getClientOriginalName();
        $picture = $request->picture->storeAs('',$filename,'public');
    }
}
