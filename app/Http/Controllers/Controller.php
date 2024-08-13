<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
    public function onechange()
    {
        return view('register');
    }

    public function twochange(Request $request)
    {
         // Validate the request
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'product_des' => 'required|string',
                'Title' => 'required|string',
                'catogery' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg', // Adjusted image validation rules
            ]);

            // Store product information
            $product = new Prduct();
            $product->Pname = $validatedData['name'];
            $product->Pdescription = $validatedData['product_des'];
            $product->Title = $validatedData['Title'];
            $product->Catogery = $validatedData['catogery'];

            // Handle image upload
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload/images'), $imageName);
            $product->image = $imageName;

            $product->save();

            return redirect()->route('register')->with('success', 'Product has been created successfully');
    }

    public function threechange()
    {
        return view('login');
    }
    // this is for the linkedin 
    public function linkedin()
    {
        return view('linkedin');
    }

}
