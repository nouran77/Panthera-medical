<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Settings;
use Helper;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAllProducts()
    {
        $products   = Product::all();
        $categories = Category::all();
        return view('admin.product', compact('products','categories'));
    }

    public function addNewProduct(Request $request)
    {
        $product                      = new Product;
        $product->name_english        = $request->name_english;
        $product->name_arabic         = $request->name_arabic;
        $product->description_english = $request->description_english;
        $product->description_arabic  = $request->description_arabic;
        $product->price               = $request->price;
        if ($request->image) {
            $product->image = Helper::uploadImage('image','products');
        }
        $product->category_id         = $request->category;

//        if (!isset($product->id)) {
//            echo "no product" ;
//        }


        if($product->save()) {
            return response()->json(['success' => true]);
        }
    }

    public function editProduct(Request $id)
    {
        $product = Product::find($id);
        return response()->json($product, 200);
    }

    public function updateProduct(Request $request)
    {
        $product                      = Product::find($request->id);
        $product->name_english        = $request->name_english;
        $product->name_arabic         = $request->name_arabic;
        $product->description_english = $request->description_english;
        $product->description_arabic  = $request->description_arabic;
        $product->price               = $request->price;
        $product->category_id         = $request->category_id;

        if ($request->image)
        {
            $product->image = Helper::uploadImage('image','products');
        }


        $product->save();

        if($product->save()) {
            return response()->json(['success' => true]);
        }

    }

    public function deleteProduct(Request $id)
    {
        $product = Product::find($id);
        $product->delete();
    }

    public function index()
    {
        $available = Settings::first();
        $products = Product::all();
        return view('product.index',compact('products','available'));
    }

    public function productDetails($id)
    {
        $product = Product::find($id);
        return view('product.productDetails',compact('product'));
    }
}
