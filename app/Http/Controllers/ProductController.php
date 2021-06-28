<?php

namespace App\Http\Controllers;

use App\Cart;
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
        $product->view_count = 1;

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
            $fileName = date('Y-m-d_h:i:s') . "_" . ".$fileExtension";
            // Luu anh vao folder uploads
            $request->file('image')->storeAs('public/products', $fileName);
            //Chay lenh storage:link de connect storage->public
            // Truyen vao
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
        return view('products.show', compact('product', 'products'));
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

    public function addToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
//        dd($request->session()->get('cart'));
        return redirect()->route('products.index')->with('message', 'Add to cart success');
    }

    public function showCart(Request $request)
    {
        if (!Session::has('cart')) {
            return view('products.showCart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('products.showCart', [
            'products' => $cart->items,
            'totalPrice' => $cart->totalPrice,
            'totalQuantity' => $cart->totalQuantity
        ]);
    }

    public function deleteCart($id)
    {
        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            $cart->delete($id);
            session()->put('cart', $cart);
        }
        return redirect()->route('products.showCart');
    }

    public function reduceByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceOne($id);
        if (count($cart->items) > 0) {
           Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return response()->json($cart);
    }

    public function increaseByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->increaseOne($id);
        Session::put('cart', $cart);
        return response()->json($cart);
    }
}
