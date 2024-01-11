<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view('backend.product.index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.product.addProduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ProductName' => 'required|max: 50',
            'description' => 'required|max: 100',
            'price' => 'required|max: 50',
            'quantity' => 'required|max: 50',
            'unite' => 'required|max: 50',
            'branchID' => 'required|max: 50',
            'categoryID' => 'required|max: 50',
        ]);

        $user = Auth::user();
        Product::create([ 
            'ProductName' => $request->ProductName,	
            'description' => $request->description,	
            'price' => $request->price,	
            'quantity' => $request->quantity,	
            'unite' => $request->unite,	
            'userID' => $user->id,	
            'branchID' => $request->branchID,	
            'categoryID' => $request->categoryID]);

            return redirect()->route('product.index');
    }

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('backend.product.editProduct')->with('products',$product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

        $request->validate([
            'ProductName' => 'required|max: 50',
            'description' => 'required|max: 100',
            'price' => 'required|max: 50',
            'quantity' => 'required|max: 50',
            'unite' => 'required|max: 50',
            'branchID' => 'required|max: 50',
            'categoryID' => 'required|max: 50',
        ]);

         $product->ProductName  = $request->ProductName;
         $product->description  = $request->description;
         $product->price  = $request->price;
         $product->quantity  = $request->quantity;
         $product->unite  = $request->unite;
         $product->branchID  = $request->branchID;
         $product->categoryID  = $request->categoryID;
         $product->save();

        return redirect()->route('product.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
