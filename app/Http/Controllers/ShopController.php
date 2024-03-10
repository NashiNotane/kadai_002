<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller
{
    public function index(){
        $shops = shop::paginate(15);
       return view('shop.index',compact('shops'));
    }
}
