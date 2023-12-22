<?php

use App\Models\Address;
use App\Models\Branch;

     $addresses = Address::all();
     $branches = Branch::all();
?>

@extends('backend.dashboard.index')
@section('contents')
<div class="container-fluid" style="padding: 10px;">
<h3 style="text-align: center;">Add Customer</h3>
  <div class="card-body">
  <form action="{{route('customer.store')}}" method="POST" style="width: 80vh;margin: 0px auto">
  @csrf
     <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Customer Name</label>
         <input type="text" name="customerName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         @error('customerName')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>
     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Customer Father Name</label>
         <input type="text" name="customerFatherName" class="form-control" id="exampleInputPassword1">
         @error('customerFatherName')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Customer Phone</label>
         <input type="text" name="customerPhone" class="form-control" id="exampleInputPassword1">
         @error('customerPhome')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Customer Type</label>
         <select name="customerType" id="">
          <option value="seller">Seller</option>
          <option value="buyer">Buyer</option>
         </select>
         @error('customerType')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Customer Address</label>
         <select name="customerAddress" id="">
               @foreach($addresses as $address)
               <option value="{{$address->id}}"> {{$address->streetNumber}} {{$address->streetName}} {{$address->district}}</option>
               @endforeach
         </select>
         @error('customerAddress')
              <p class="text-danger">{{ $message }}</p>
         @enderror

     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Branch</label>
         <select name="branch" id="">
               @foreach($branches as $branch)
                    <option value="{{$branch->id}}">{{$branch->branchName}}</option>
               @endforeach
         </select>
         @error('branch')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <button type="submit" class="btn btn-primary">Submit</button>
</form>
 </div>
</div>
@endsection