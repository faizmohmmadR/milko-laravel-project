<?php

use App\Models\Address;
use App\Models\Branch;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;

     $dbProducts = Product::all();
     $categoryes = Category::all();
     $branches = Branch::all();
     $customeres = Customer::all();
     $addresses = Address::all();
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
         <select name="productID[]" class="form-select" size="" aria-label="Size 3 select example" multiple>
               @foreach($dbProducts as $dbProduct)
               <option 
               value="{{$dbProduct->id}}"  
               @foreach($products as $product)
                    @if($dbProduct->id == $product->id)
                         selected
                    @endif
               @endforeach >{{$dbProduct->ProductName}}</option>
               @endforeach    
         </select>
         
         @error('productID')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>


     
     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label"> Branch</label>
         <select name="branchID" class="form-select form-select-sm" aria-label="Small select example">
               @foreach($branches as $branch)
               <option value="{{$branch->id}}" {{$branch->id == $sale->branchID ? 'selected' : ''}}>{{$branch->branchName}}</option>
               @endforeach
         </select>
         @error('branchID')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Category</label>
         <select name="categoryID" class="form-select form-select-sm" aria-label="Small select example">
               @foreach($categoryes as $category)
               <option value="{{$category->id}}" {{$category->id == $sale->categoryID ? 'selected' : ''}}>{{$category->categoryName}}</option>
               @endforeach
         </select>

         @error('categoryID')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>


     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Address</label>
         <select name="addressID" class="form-select form-select-sm" aria-label="Small select example" >
               @foreach($addresses as $address)
               <option value="{{$address->id}}" {{$address->id == $sale->addressID ? 'selected' : ''}}>{{$address->streetNumber}},{{$address->streetName}},{{$address->district}}</option>
               @endforeach
         </select>
         @error('addressID')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Customer</label>
         <select name="customerID" class="form-select form-select-sm" aria-label="Small select example" >
               @foreach($customeres as $customer)
               <option value="{{$customer->id}}" {{$customer->id == $sale->customerID ? 'selected' : ''}}>{{$customer->customerName}}</option>
               @endforeach
         </select>
         @error('customerID')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label"> Quantity</label>
         <input type="number" name="quantity" value="{{$sale->quantity}}" class="form-control" id="exampleInputPassword1">
         @error('quantity')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     
     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Unite of Product</label>
         <select name="unite" class="form-select form-select-sm" aria-label="Small select example" >
               <option value="Kg"  {{$sale->unite === 'Kg' ? 'selected' : ''}}>Kg</option>
               <option value="Danah" {{$sale->unite === 'Danah' ? 'selected' : ''}}>Danah</option>
               <option value="Charyak" {{$sale->unite === 'Charyak' ? 'selected' : ''}}>Charyak</option>
               <option value="Pow" {{$sale->unite === 'Pow' ? 'selected' : ''}}>Pow</option>
               <option value="Sir" {{$sale->unite === 'Sir' ? 'selected' : ''}}>Sir</option>
         </select>
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