<?php

namespace App\Http\Controllers;

use App\Models\Purchese;
use Illuminate\Http\Request;

class PurchesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pureches = Purchese::all();
        return view('backend.purcheses.index')->with('purches',$pureches);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.purcheses.addPurcheses');
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

        $purches = new Purchese();
        
        $purches->productID   =  $request->input('productID');
        $purches->userID      =  1;
        $purches->branchID    =  $request->input('branchID');
        $purches->categoryID  =  $request->input('categoryID');
        $purches->customerID  =  $request->input('customerID');
        $purches->quantity    =  $request->input('quantity');
        $purches->unite       =  $request->input('unite');
        $purches->unitePrice  =  $request->input('unitePrice');
        $purches->totalPrice  = $request->input('totalPrice');
        $purches->save();

        return redirect()->route('purches.index');
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
    public function edit(Purchese $purch)
    {
        return view('backend.purcheses.editPurcheses')->with('purches',$purch);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Purchese $purches)
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

        $purches->productID  = $request->productID;
        $purches->branchID  = $request->branchID;
        $purches->categoryID  = $request->categoryID;
        $purches->customerID  = $request->customerID;
        $purches->quantity  = $request->quantity;
        $purches->unite  = $request->unite;
        $purches->unitePrice  = $request->unitePrice;
        $purches->totalPrice  = $request->totalPrice;
        $purches->save();
        return redirect()->route('purches.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
