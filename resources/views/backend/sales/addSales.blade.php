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
<h3 style="text-align: center;">Add Sales</h3>
  <div class="card-body">
  <form action="{{route('sales.store')}}" method="POST" style="width: 80vh;margin: 0px auto">
  @csrf
     <div class="mb-3">
        
         <select name="productID[]" id="" class="form-select form-select-sm" aria-label="Default select example" multiple >
               @foreach($products as $product)
               <option value="{{$product->id}}" >{{$product->ProductName}}</option>
               @endforeach
         </select>
         
         @error('productID')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     
     <div class="mb-3">
         <select name="branchID" class="form-select form-select-sm" aria-label="Small select example">
               <option selected>choose branch</option>
               @foreach($branches as $branch)
               <option value="{{$branch->id}}">{{$branch->branchName}}</option>
               @endforeach
         </select>
         @error('branchID')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <select name="categoryID" class="form-select form-select-sm" aria-label="Small select example" id="">
               <option selected>choose category </option>
               @foreach($categoryes as $category)
               <option value="{{$category->id}}">{{$category->categoryName}}</option>
               @endforeach
         </select>

         @error('categoryID')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>


     <div class="mb-3">
         <select name="customerID" class="form-select form-select-sm" aria-label="Small select example" >
               <option selected>choose the customer</option>
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
         
         <select name="unite" class="form-select form-select-sm" aria-label="Small select example">
               <option selected>choose the unite of product</option>
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