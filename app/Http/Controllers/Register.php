<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\prduct;
use Illuminate\Support\Facades\Validator;
class Register extends Controller
{
    //
    public function register()
    {
        return view('register');
    }

    public function registerData(Request $request)
    {
        // $rules = [
        //     'Pname' => 'required | min:3 | max:255',
        //     'Pdescription' => 'required | min:3 | max:255',
        //     'price' => 'required | numeric',
        //     'quantity' => 'required | numeric',
        //     'stock' => 'required | numeric',
        //     'Abilablequantity' => 'required | numeric',
        //     'image' => 'required | mimes:jpeg,jpg,png,gif | max:1000000',
        // ];

        // $validator = Validator::make($request->all(), $rules);

        // if($validator->fails()){
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        $product = new prduct();
        $product->Pname = $request->name;
        $product->Pdescription = $request->product_des;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->stock = $request->stock;
        $product->Abilablequantity = $request->stock;

        if($request->hasFile('img')){
            $image = $request->img;
            $ext = $image->getClientOriginalExtension();
            $imageName = time().'.'.$ext;
            $image->move(public_path('upload/images'), $imageName);
            $product->image = $imageName;
        }

        $product->save();
        
        return redirect()->route('/')->with('success', 'Product has been created successfully');

        // return redirect()->route('register')->with('success', 'Product has been created successfully');
    }

    public function HomePage()
    {
        // $products = prduct::all();
        // return view('show', compact('products'));

        $products = prduct::orderBy('id', 'DESC')->get();
        return view('Homepage', ['products' => $products]);
        
        // return view('homepage');
    }
    
      
}
