<?php

use App\Models\Address;
use App\Models\Branch;

     $addresses = Address::all();
     $branches = Branch::all();
?>

@extends('backend.dashboard.index')
@section('contents')
<div class="container-fluid" style="padding: 10px;">
<h3 style="text-align: center;">add customer</h3> <hr>
  <div class="card-body">
  <form action="{{route('customer.store')}}" method="POST" style="width: 80vh;margin: 0px auto">
  @csrf
     <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">customer name</label>
         <input type="text" name="customerName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         @error('customerName')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>
     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">customer father name</label>
         <input type="text" name="customerFatherName" class="form-control" id="exampleInputPassword1">
         @error('customerFatherName')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">customer phone</label>
         <input type="text" name="customerPhone" class="form-control" id="exampleInputPassword1">
         @error('customerPhome')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">customer type</label>
         <select name="customerType" class="form-select form-select-sm">
               <option selected>choose customer type</option>
               <option value="seller">Seller</option>
               <option value="buyer">Buyer</option>
         </select>
         @error('customerType')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">customer address</label>
         <select name="customerAddress" class="form-select form-select-sm">
               <option selected>choose the customer address</option>
               @foreach($addresses as $address)
               <option value="{{$address->id}}"> {{$address->streetNumber}} {{$address->streetName}} {{$address->district}}</option>
               @endforeach
         </select>
         @error('customerAddress')
              <p class="text-danger">{{ $message }}</p>
         @enderror

     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">branch</label>
         <select name="branch" class="form-select form-select-sm">
               <option selected>choose customer related branch</option>
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