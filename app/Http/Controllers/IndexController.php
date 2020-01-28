<?php

namespace App\Http\Controllers;

use App\Product;
use App\Unit;
use App\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $datas = Product::with(['unit','category'])->get();
        return view('layouts.index',[
        'datas' => $datas
        ]);
    }
}