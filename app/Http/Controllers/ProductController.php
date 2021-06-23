<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('products.list', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->vote = $request->input('vote');

        $file = $request->image;
        if (!$request->hasFile('image')) {
            $product->image = $file;
            if (!$request->file('image')->getSize()) {
//                dd($request->file('image')->getSize());
                $message = 'Please choose different image';
                Session::flash('image_false', $message);
                return redirect()->route('products.create');
            }
        } else {
            // Lay phan mo rong cua ten anh
            $fileExtension = $file->getClientOriginalExtension();
            // Convert ten anh
            $fileName = date('Y-m-d_h:i:s') . "_" . $request->name . ".$fileExtension";
            // Luu anh vao folder uploads
            $request->file('image')->storeAs('public/products', $fileName);
            //Chay lenh storage:link de connect storage->public
            // Truyen vao Task
            $product->image = $fileName;
        }
        $product->save();

        $message = "Add task $request->name success";
        Session::flash('create_success', $message);
        return redirect()->route('products.index');

    }

    public function show($id)
    {
        $productKey = 'product_' . $id;
        if (!Session::has($productKey)) {
            Product::where('id', $id)->increment('view_count');
            Session::put($productKey, 1);
        }

        $product = Product::findOrFail($id);
        $products = Product::where('id', '>', 5)->take(3)->get();
        return view('products.show',compact('product', 'products'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
