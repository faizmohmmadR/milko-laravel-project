<?php

use App\Models\Address;
use App\Models\Branch;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;

     $products = Product::all();
     $categoryes = Category::all();
     $branches = Branch::all();
     $customeres = Customer::all();
?>

@extends('backend.dashboard.index')
@section('contents')
<div class="container-fluid" style="padding: 10px;">
<h3 style="text-align: center;">Add Purches</h3>
  <div class="card-body">
  <form action="{{route('purches.store')}}" method="POST" style="width: 80vh;margin: 0px auto">
  @csrf
  <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Product </label>
         <select name="productID[]" id="" multiple >
               @foreach($products as $product)
               <option value="{{$product->id}}">{{$product->ProductName}}</option>
               @endforeach
         </select>
         
         @error('productID')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     
     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label"> Branch</label>
         <select name="branchID" id="">
               @foreach($branches as $branch)
               <option value="{{$branch->id}}">{{$branch->branchName}}</option>
               @endforeach
         </select>
         @error('branchID')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Category</label>
         <select name="categoryID" id="">
               @foreach($categoryes as $category)
               <option value="{{$category->id}}">{{$category->categoryName}}</option>
               @endforeach
         </select>

         @error('categoryID')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>


     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Customer</label>
         <select name="customerID" id="" >
               @foreach($customeres as $customer)
               <option value="{{$customer->id}}">{{$customer->customerName}}</option>
               @endforeach
         </select>
         @error('customerID')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label"> Quantity</label>
         <input type="number" name="quantity" class="form-control" id="exampleInputPassword1">
         @error('quantity')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     
     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Unite of Product</label>
         <select name="unite" id="">
               <option value="Kg">Kg</option>
               <option value="Danah">Danah</option>
               <option value="Charyak">Charyak</option>
               <option value="Pow">Pow</option>
               <option value="Sir">Sir</option>
         </select>
         @error('unite')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Unite price of Product</label>
         <input type="number" name="unitePrice" class="form-control" id="exampleInputPassword1">
         @error('unitePrice')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Total price of Product</label>
         <input type="number" name="totalPrice" class="form-control" id="exampleInputPassword1">
         @error('totalPrice')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <button type="submit" class="btn btn-primary">Submit</button>
</form>
 </div>
</div>
@endsection