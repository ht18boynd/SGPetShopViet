<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homedb(Request $request)
    {
        $prods = Product::all();
        $order = Order::all();
        $ord = OrderDetail::all();
        $user = User::all();
        $cate=Category::all();
        
        return view ('admin.homedb',compact('prods' , 'order','user','ord','cate'));
    }

}
