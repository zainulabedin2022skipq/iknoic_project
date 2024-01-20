<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\user_feedback;



class dashboard extends Controller


{
    public function dashboard()
    {
        $allProduct = Product::count();
        $allFeedback = user_feedback::count();
        return view('dashboard.dashboard',
        [
            'allProduct' => $allProduct,
            'allFeedback' => $allFeedback
        ]);
    }

    public function create_product()
    {
        $product = product::all();
        return view('dashboard.create_product',
        [
            'product' => $product
        ]);
    }


// =============== store the Product ==============================

    public function store_product(request $request)
    {
        $product=new product;
        $product->product_name=$request->get('product_name');
        $product_url=str::slug($request->get('product_name'));
        $product->product_url=$product_url;
        $product->product_detail=$request->get('product_detail');
        $product->product_price=$request->get('product_price');
        if ($request->hasFile('product_picture')) {
        $image_name = time() . '.' . $request->file('product_picture')->extension();
        $img_file = $request->file('product_picture')->move(public_path('all_product'), $image_name);
        $product->product_picture = $image_name;
        }
        $product->save();
        return redirect('/dashboard/create_product')->with('success', 'Your data Send successfully');
    }

// ==================== end store the product ===============================================


// ====================== create and show the user feedback in dashboard ====================

    public function create_feedback(request $request , $id){
        $feedback = new user_feedback;
        $user_name = auth()->user()->name;
        $user_feedback = $request->get('user_feedback');
        $product_id = $id;

    $data = user_feedback::create([
        'user_name' => $user_name,
        'user_feedback' => $user_feedback,
        'product_id' => $product_id,
    ]);
    return redirect('/index');
    
    }

    public function show_feedback(){
        $user_feedback = user_feedback::all();
        return view('dashboard.user_feedback',[
            'user_feedback' => $user_feedback
        ]);
    }

// ====================== End user feedback ======================================================

}
