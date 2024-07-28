<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\prduct;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

    public function HomePage()
    {
        $products = prduct::orderBy('id', 'DESC')->get();
        return view('Homepage', ['products' => $products]);
        
        // return view('homepage');
    }
    
    public function productView($id)
    {
        $product = prduct::findorFail($id);
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
        return view('update', ['products' => $product]);
        // echo $id;
    }

    public function update(Request $request, $id)
    {
        
        $products = prduct::findorFail($id);
        $image_Name=  $products->image;
        $rules = [
            'name' => 'required|string|max:255',
            'product_des' => 'required|string',
            'Title' => 'required|string',
            'catogery' => 'required',

        ];

        if($request->image!="")
        {

            $rules['image'] ='image';
        }

   

     $validator = Validator::make($request->all(), $rules);


    
        $products->Pname = $request->name;
        $products->Pdescription= $request->product_des;
        $products->Title = $request->Title;
        $products->Catogery= $request->catogery;
        $products->image = $request->image;
        
        if($request->image!=""){
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload/images'), $imageName);
            $products->image = $imageName;
        
        }
        else
        {
        $products->image= $image_Name;
        }

        $products->save();


          return redirect()->route('product.edit', $products->id)->with('success', 'Product has been created successfully');
   
        
    }

    public function delete($id)
    {

        $product = prduct::findorFail($id);
        $product->delete();
        return redirect()->route('product.edit.delete')->with('success', 'Product has been deleted successfully');
    }

    public function search( Request $request)
    {


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

    public function registerUser()
    {
        // return view('login');
        // return view('userRegister');
        return view('userRegister');
    }

    public function userlogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // echo "login";
        $email = $request->email;
        $password = $request->password;

        $user = User::where('email', $email)->first();
        // echo $user;
        if ($user) {
            if (Hash::check($password, $user->password)) {
                return redirect()->route('home');
            } else {
                return redirect()->route('user.login')->withErrors(['Invalid password']);

                // return view('Homepage', ['products' => $user]);
            }
        } else {
            return redirect()->route('user.login')->withErrors(['Invalid email']);
        }

        
    }

    public function registerUserData(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
        ]);

            $user = new User();
            $user->name = $validatedData['name'];
            $user->email = $validatedData['email'];
            $user->password = Hash::make($validatedData['password']);
            $user->save();
            return redirect()->route('home')->with('success', 'User has been registered successfully');
    }


    public function get_browserda()
    {
        return view('get_browser');
    }

    public function get_browser(Request $request)
    {
        $user_agent = $request->header('User-Agent');
        $browser = $this->getBrowser($user_agent);
        return view('get_browser', ['browser' => $browser]);
    }
}

    

