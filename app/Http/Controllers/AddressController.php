<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;


class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $addresses = Address::paginate(10);
        return view('backend.addresses.addresses')->with('addresses',$addresses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.addresses.addingPosts.addAddress');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'streetNumber'=>'required|max:4',
            'streetName'=>'required|max:50',
            'district'=>'required|max:100',
        ]);
        
        Address::create(['streetNumber'=> $request->streetNumber,'streetName'=>$request->streetName,'district'=>$request->district]);
        return redirect()->route('address.index');
    
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
    public function edit(Address $address)
    {
        return view('backend.addresses.editAddress.editAddress')->with('address',$address);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Address $address)
    {
        $request->validate([
            'streetNumber'=>'required|max:4',
            'streetName'=>'required|max:50',
            'district'=>'required|max:100',
        ]);

        $address->streetNumber = $request->streetNumber;
        $address->streetName   = $request->streetName;
        $address->district = $request->district;
        $address->save();
        return redirect()->route('address.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)
    {
        
        return $address;
    }
}
