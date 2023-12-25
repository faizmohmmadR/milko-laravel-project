<?php

use App\Models\Address;
use App\Models\Branch;

     $addresses = Address::all();
     $branches = Branch::all();
?>

@extends('backend.dashboard.index')
@section('contents')
<div class="container-fluid" style="padding: 10px;">
<h3 style="text-align: center;">Update Product</h3>
  <div class="card-body">
  <form action="{{route('product.update',['product' => $products->id])}}" method="POST" style="width: 80vh;margin: 0px auto">
  @csrf
  @method('PUT')
     <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Product Name</label>
         <input type="text" name="ProductName" value="{{$products->ProductName}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         @error('ProductName')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputEmail1"  class="form-label">Description LName</label>
         <input type="text" name="description" value="{{$products->description}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         @error('description')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Price</label>
         <input type="text" name="price" value="{{$products->price}}" class="form-control" id="exampleInputPassword1">
         @error('price')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label"> Quantity</label>
         <input type="text" name="quantity" value="{{$products->quantity}}" class="form-control" id="exampleInputPassword1">
         @error('quantity')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Unite</label>
         <input type="text" name="unite" value="{{$products->unite}}" class="form-control" id="exampleInputPassword1">
         @error('unite')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Branch</label>
         <input type="text" name="branchID" value="{{$products->branchID}}" class="form-control" id="exampleInputPassword1">
         @error('branchID')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>
     
     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Category</label>
         <input type="text" name="categoryID" value="{{$products->categoryID}}" class="form-control" id="exampleInputPassword1">
         @error('categoryID')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>
     <button type="submit" class="btn btn-primary">update</button>
</form>
 </div>
</div>
@endsection