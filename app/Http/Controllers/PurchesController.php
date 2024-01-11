<?php

namespace App\Http\Controllers;

use App\Models\Purchese;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $user = Auth::user();
        $purches = new Purchese();
        $purches->userID      =  $user->id;
        $purches->branchID    =  $request->input('branchID');
        $purches->categoryID  =  $request->input('categoryID');
        $purches->customerID  =  $request->input('customerID');
        $purches->quantity    =  $request->input('quantity');
        $purches->unite       =  $request->input('unite');
        $purches->unitePrice  =  $request->input('unitePrice');
        $purches->totalPrice  = $request->input('totalPrice');
        $purches->save();

        $purches->products()->attach($request->productID);

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
        return view('backend.purcheses.editPurcheses')->with('purches',$purch)->with('purchesProduct',$purch->products);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Purchese $purch)
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

        $user = Auth::user();
        
        $purch->userID = $user->id;
        $purch->categoryID  = $request->categoryID;
        $purch->customerID  = $request->customerID;
        $purch->quantity  = $request->quantity;
        $purch->unite  = $request->unite;
        $purch->unitePrice  = $request->unitePrice;
        $purch->totalPrice  = $request->totalPrice;
        $purch->save();
        
        $purch->products()->attach($request->productID);
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
