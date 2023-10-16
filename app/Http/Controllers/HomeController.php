<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role; // Fetch the user's role
        if ($role == '1') {

            return view('admin.admin');
        } else {
            return view('home.customer');
        }
    }

    // Rest of your controller code...


    public function product()
    {
        $products = Product::paginate(3);

        return view('home.product',compact('products'));

    }

    public function add_cart(Request $request,$id)
    {


            $user=Auth::user();

            $product=product::find($id);

            $product_exist_id=Cart::where('product_id',$id)->where('user_id')->get('id')->first();

            if($product_exist_id!=NULL){
                $cart=Cart::find($product_exist_id->id)->first();
                $cart->quantity=$cart->quantity+$request->quantity;

                if($product->discount_price==NULL){
                    $cart->price=$product->price* $cart->quantity;
                }
                else{
                    $cart->price=$product->discount_price * $cart->quantity;
                }
                $cart->save();

                return redirect()->back();
            }




        else
        {

            $cart=new Cart();

            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->user_id=$user->id;

            $cart->product_title=$product->title;

            if($product->discount_price==NULL){
                $cart->price=$product->price * $request->quantity;
            }
            else{
                $cart->price=$product->discount_price * $request->quantity;
            }

            $cart->quantity=$request->quantity;
            $cart->image=$product->image;
            $cart->product_id=$product->id;

            $cart->save();
            return redirect()->back();
        }
    }


}








