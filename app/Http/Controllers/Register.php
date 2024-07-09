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
      // Validate the request
    // $validatedData = $request->validate([
    //     'Pname' => 'required|string|max:255',
    //     'Pdescription' => 'required|string',
    //     'price' => 'required|numeric',
    //     'quantity' => 'required|integer',
    //     'stock' => 'required|integer',
    //     'Abilablequantity' => 'required|integer',
    //     'Catogery' => 'required|string',
    //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg', // Add validation rules for image
    // ]);

    // // Handle the file upload
    // if ($request->hasFile('image')) {
    //     $file = $request->file('image');
    //     $extension = $file->getClientOriginalExtension(); // Get the file extension
    //     $filename = time() . '.' . $extension; // Create a unique filename
    //     $file->move(public_path('images'), $filename); // Move the file to the desired location
    //     $validatedData['image'] = $filename; // Store the filename in the validated data array
    // }

    // Create the product
    // $product = new Prduct($validatedData);
    // $product->save();


        $product = new prduct();
        $product->Pname = $request->name;
        $product->Pdescription = $request->product_des;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->stock = $request->stock;
        $product->Title = $request->stock;
        $product->Catogery= $request->catogery;

       
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time().'.'.$ext;
            $image->move(public_path('upload/images'), $imageName);
            $product->image = $imageName;
        

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
    
    public function productView($id)
    {
        $product = prduct::findorFail($id);
        // return view('viewBlogpage', ['product' => $product]);

        // return view('viewBlogpage', ['products' => $product]);
        if (!$product) {
            // Handle the case when the product is not found
            return redirect()->route('homepage')->withErrors(['Product not found.']);
        }
    
        return view('viewBlogpage', compact('product'));
    }
    
    public function editDelete()
    {
        $products = prduct::orderBy('id', 'DESC')->get();
        return view('EditDeletePage', ['products' => $products]);
        
    }

    public function edit($id)
    {
        $product = prduct::findorFail($id);
        return view('edit', ['product' => $product]);
    }

    public function delete($id)
    {
        $product = prduct::findorFail($id);
        $product->delete();
        return redirect()->route('product.edit.delete')->with('success', 'Product has been deleted successfully');
    }

    public function search( Request $request)
    {
        // $search = $request->search;
        // $products = prduct::where('Pname', 'like', '%'.$search.'%')->get();
        // return view('EditDeletePage', ['products' => $products]);
        
        
        $search = $request->input('search');
        // echo $search;
        if (preg_match('/\d/', $search)) {
            // $products = Prduct::where('id', 'like', '%' . $search . '%')->get();
            $products = Prduct::where('id', $search)->get();
            return view('search', ['products' => $products]);
           
        }
        else
        {
            $products = Prduct::where('Pname', 'like', '%' . $search . '%')->get();
            return view('search', ['products' => $products]);
        }
      

    
    }
}

    

