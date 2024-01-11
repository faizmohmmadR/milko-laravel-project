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
?>

@extends('backend.dashboard.index')
@section('contents')
<div class="container-fluid" style="padding: 10px;">
<h3 style="text-align: center;">Update purchess</h3>
  <div class="card-body">
  <form action="{{route('purches.update',['purch' => $purches->id])}}" method="POST" style="width: 80vh;margin: 0px auto">
  @csrf
  @method('PUT')
  <div class="mb-3">
         <select name="productID[]" class="form-select form-select-sm" aria-label="Default select example" multiple>
         @foreach($dbProducts as $dbProduct)
               <option   
               @foreach($purchesProduct as $product)
                    @if($dbProduct->id == $product->id)
                         selected
                    @endif
               @endforeach

               value="{{$dbProduct->id}}"
               >
                    {{$dbProduct->ProductName}}</option>
               @endforeach
               
         </select>
         
         @error('productID')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <select name="branchID" id="" class="form-select form-select-sm" aria-label="Default select example">
               @foreach($branches as $branch)
               <option value="{{$branch->id}}" {{$branch->id == $purches->branchID ? 'selected' : ''}}>{{$branch->branchName}}</option>
               @endforeach
         </select>
         @error('branchID')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
        
         <select name="categoryID" id="" class="form-select form-select-sm" aria-label="Default select example">
               @foreach($categoryes as $category)
               <option value="{{$category->id}}" {{$category->id == $purches->categoryID ? 'selected' : ''}}>{{$category->categoryName}}</option>
               @endforeach
         </select>

         @error('categoryID')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>



     <div class="mb-3">
         <select name="customerID" id="" class="form-select form-select-sm" aria-label="Default select example" >
               @foreach($customeres as $customer)
               <option value="{{$customer->id}}" {{$customer->id == $purches->customerID ? 'selected' : ''}}>{{$customer->customerName}}</option>
               @endforeach
         </select>
         @error('customerID')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label"> Quantity</label>
         <input type="number" name="quantity" value="{{$purches->quantity}}" class="form-control" id="exampleInputPassword1">
         @error('quantity')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     
     <div class="mb-3">
         <select name="unite" id="" class="form-select form-select-sm" aria-label="Default select example" >
               <option value="Kg"  {{$purches->unite === 'Kg' ? 'selected' : ''}}>Kg</option>
               <option value="Danah" {{$purches->unite === 'Danah' ? 'selected' : ''}}>Danah</option>
               <option value="Charyak" {{$purches->unite === 'Charyak' ? 'selected' : ''}}>Charyak</option>
               <option value="Pow" {{$purches->unite === 'Pow' ? 'selected' : ''}}>Pow</option>
               <option value="Sir" {{$purches->unite === 'Sir' ? 'selected' : ''}}>Sir</option>
         </select>
         @error('unite')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Unite price of Product</label>
         <input type="number" name="unitePrice" value="{{$purches->unitePrice}}" class="form-control" id="exampleInputPassword1">
         @error('unitePrice')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Total price of Product</label>
         <input type="number" name="totalPrice" value="{{$purches->totalPrice}}" class="form-control" id="exampleInputPassword1">
         @error('totalPrice')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <button type="submit" class="btn btn-primary">update</button>
</form>
 </div>
</div>
@endsection