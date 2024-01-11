<?php

use App\Models\Address;
use App\Models\Branch;

     $addresses = Address::all();
     $branches = Branch::all();
?>

@extends('backend.dashboard.index')
@section('contents')
<div class="container-fluid" style="padding: 10px;">
<h3 style="text-align: center;">edit customer</h3> <hr>
  <div class="card-body">
  <form action="{{route('customer.update',['customer' => $customers->id])}}" method="POST" style="width: 80vh;margin: 0px auto">
  @csrf
  @method('PUT')
     <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">customer name</label>
         <input type="text" value="{{$customers->customerName}}" name="customerName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         @error('customerName')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>
     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">customer father name</label>
         <input type="text" value="{{$customers->customerFatherName}}" name="customerFatherName" class="form-control" id="exampleInputPassword1">
         @error('customerFatherName')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">customer phone</label>
         <input type="text" value="{{$customers->customerPhone}}" name="customerPhone" class="form-control" id="exampleInputPassword1">
         @error('customerPhome')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">customer type</label>
         <select name="customerType" class="form-select form-select-sm">
          <option value="seller" {{$customers->customerType == 'seller' ? 'selected' : ''}}>Seller</option>
          <option value="buyer"  {{$customers->customerType == 'seller' ? 'selected' : ''}}>Buyer</option>
         </select>
         @error('customerType')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">customer address</label>
         <select name="customerAddress" class="form-select form-select-sm">
               @foreach($addresses as $address)
               <option value="{{$address->id}}" {{$customers->customerAddress == $address->id ? 'selected' : ''}}> {{$address->streetNumber}} {{$address->streetName}} {{$address->district}}</option>
               @endforeach
         </select>
         @error('customerAddress')
              <p class="text-danger">{{ $message }}</p>
         @enderror

     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">branch</label>
         <select name="branch" value="{{$customers->branch}}" class="form-select form-select-sm">
               @foreach($branches as $branch)
                    <option value="{{$branch->id}}" {{$customers->branch == $branch->id ? 'selected' : ''}}>{{$branch->branchName}}</option>
               @endforeach
         </select>
         @error('branch')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <button type="submit" class="btn btn-primary">Update</button>
</form>
 </div>
</div>
@endsection