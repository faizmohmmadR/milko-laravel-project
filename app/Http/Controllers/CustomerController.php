<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();

        return view('backend.customer.index')->with('customers',$customers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.customer.addCustomer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'customerName' => 'required|max: 50',
            'customerFatherName' => 'required|max: 50',
            'customerPhone' => 'required|max: 50',
            'customerType' => 'required|max: 50',
            'customerAddress' => 'required|max: 50',
            'branch' => 'required|max: 50',
        ]);
    
        Customer::create([ 
            'customerName' => $request->customerName, 
            'customerFatherName' => $request->customerFatherName, 
            'customerPhone' => $request->customerPhone, 
            'customerType' => $request->customerType, 
            'customerAddress' => $request->customerAddress, 
            'branch' =>$request->branch]);
            return redirect()->route('customer.index');
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
    public function edit(Customer $customer)
    {
        return view('backend.customer.editCustomer')->with('customers',$customer);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'customerName' => 'required|max: 50',
            'customerFatherName' => 'required|max: 50',
            'customerPhone' => 'required|max: 50',
            'customerType' => 'required|max: 50',
            'customerAddress' => 'required|max: 50',
            'branch' => 'required|max: 50',
        ]);
        $customer->customerName = $request->customerName;
        $customer->customerFatherName = $request->customerFatherName;
        $customer->customerPhone = $request->customerPhone;
        $customer->customerType = $request->customerType;
        $customer->customerAddress = $request->customerAddress;
        $customer->branch = $request->branch;
        $customer->save();
        return redirect()->route('customer.index');
     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return 'success';
    }
}
