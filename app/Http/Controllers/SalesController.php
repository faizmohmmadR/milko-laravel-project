<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sales::all();
        return view('backend.sales.index')->with('sales',$sales);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.sales.addSales');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'productID' => 'required|max:50',
            'branchID' => 'required|max:50',
            'categoryID' => 'required|max:50',
            'customerID' => 'required|max:50',
            'quantity' => 'required|max:50',
            'unite' => 'required|max:50',
            'unitePrice' => 'required|max:50',
            'totalPrice' => 'required|max:50',
        ]);


        $sales = new Sales();
        $user = Auth::user();
        $sales->userID      =  $user->id;
        $sales->branchID    =  $request->input('branchID');
        $sales->categoryID  =  $request->input('categoryID');
        $sales->customerID  =  $request->input('customerID');
        $sales->quantity    =  $request->input('quantity');
        $sales->unite       =  $request->input('unite');
        $sales->unitePrice  =  $request->input('unitePrice');
        $sales->totalPrice  = $request->input('totalPrice');
        $sales->save();

        $sales->products()->attach($request->productID);

        return redirect()->route('sales.index');

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
    public function edit(Sales $sale)
    {
        return view('backend.sales.editSales')->with('sale',$sale)->with('products',$sale->products);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sales $sale)
    {
        $request->validate([
            'productID' => 'required|max:50',
            'branchID' => 'required|max:50',
            'categoryID' => 'required|max:50',
            'customerID' => 'required|max:50',
            'quantity' => 'required|max:50',
            'unite' => 'required|max:50',
            'unitePrice' => 'required|max:50',
            'totalPrice' => 'required|max:50',
        ]);

        $sale->branchID  = $request->branchID;
        $sale->categoryID  = $request->categoryID;
        $sale->customerID  = $request->customerID;
        $sale->quantity  = $request->quantity;
        $sale->unite  = $request->unite;
        $sale->unitePrice  = $request->unitePrice;
        $sale->totalPrice  = $request->totalPrice;
        $sale->save();

        $sale->products()->attach($request->productID);

        
        return redirect()->route('sales.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sales $sale)
    {
        $sale->delete();
        return "success";
    }
}
