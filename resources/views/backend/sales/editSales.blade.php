<?php

use App\Models\Address;
use App\Models\Branch;

     $addresses = Address::all();
     $branches = Branch::all();
?>

@extends('backend.dashboard.index')
@section('contents')
<div class="container-fluid" style="padding: 10px;">
<h3 style="text-align: center;">Update Sales</h3>
  <div class="card-body">
  <form action="{{route('sales.update',['sale' => $sale->id])}}" method="POST" style="width: 80vh;margin: 0px auto">
  @csrf
  @method('PUT')
     <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Product </label>
         <input type="number" name="productID" value="{{$sale->productID}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         @error('productID')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     
     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label"> Branch</label>
         <input type="number" name="branchID" value="{{$sale->branchID}}" class="form-control" id="exampleInputPassword1">
         @error('branchID')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Category</label>
         <input type="number" name="categoryID" value="{{$sale->categoryID}}" class="form-control" id="exampleInputPassword1">
         @error('categoryID')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>


     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Customer</label>
         <input type="number" name="customerID" value="{{$sale->customerID}}" class="form-control" id="exampleInputPassword1">
         @error('customerID')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label"> Quantity</label>
         <input type="text" name="quantity" value="{{$sale->quantity}}" class="form-control" id="exampleInputPassword1">
         @error('quantity')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     
     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Unite of Product</label>
         <input type="text" name="unite" value="{{$sale->unite}}" class="form-control" id="exampleInputPassword1">
         @error('unite')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Unite price of Product</label>
         <input type="number" name="unitePrice" value="{{$sale->unitePrice}}" class="form-control" id="exampleInputPassword1">
         @error('unitePrice')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Total price of Product</label>
         <input type="number" name="totalPrice" value="{{$sale->totalPrice}}" class="form-control" id="exampleInputPassword1">
         @error('totalPrice')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <button type="submit" class="btn btn-primary">update</button>
</form>
 </div>
</div>
@endsection