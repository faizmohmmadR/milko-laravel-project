<?php

use App\Models\Address;
use App\Models\Branch;
use App\Models\Category;

     $addresses = Address::all();
     $branches = Branch::all();
     $categoryes = Category::all();
?>

@extends('backend.dashboard.index')
@section('contents')
<div class="container-fluid" style="padding: 10px;">
<h3 style="text-align: center;">Update Product</h3>
<hr>
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
         <label for="exampleInputEmail1" class="form-label">Description LName</label>
         <input type="text" name="description" value="{{$products->description}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         @error('description')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label"> quantity</label>
         <input type="text" name="quantity" value="{{$products->quantity}}" class="form-control" id="exampleInputPassword1">
         @error('quantity')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
     <label for="exampleInputPassword1" class="form-label"> unite</label>
         <select name="unite" class="form-select form-select-sm" aria-label="Small select example">
               <option selected>choose the unite of product</option>
               <option value="Kg" {{$products->unite == 'Kg' ? 'selected' : ''}}>Kg</option>
               <option value="Danah" {{$products->unite == 'Danah' ? 'selected' : ''}}>Danah</option>
               <option value="Charyak" {{$products->unite == 'Charyak' ? 'selected' : ''}}>Charyak</option>
               <option value="Pow" {{$products->unite == 'Pow' ? 'selected' : ''}}>Pow</option>
               <option value="Sir" {{$products->unite == 'Sir' ? 'selected' : ''}}>Sir</option>
         </select>
         @error('unite')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>


     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">price</label>
         <input type="text" name="price" value="{{$products->price}}" class="form-control" id="exampleInputPassword1">
         @error('price')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
     <label for="exampleInputPassword1" class="form-label">branch</label>
         <select name="branchID" class="form-select form-select-sm" aria-label="Small select example">
               @foreach($branches as $branch)
                    <option value="{{$branch->id}}" {{$products->branchID == $branch->id ? 'selected' : ''}}>{{$branch->branchName}}</option>
               @endforeach
         </select>
         @error('branchID')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>
     
     <div class="mb-3">
     <label for="exampleInputPassword1" class="form-label">category</label>
         <select name="categoryID" class="form-select form-select-sm" aria-label="Small select example">
               @foreach($categoryes as $category)
                    <option value="{{$category->id}}" {{$products->categoryID == $category->id ? 'selected' : ''}}>{{$category->categoryName}}</option>
               @endforeach
         </select>
         @error('categoryID')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Image</label>
         <input type="file" name="image">
         @error('image')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <button type="submit" class="btn btn-primary">update</button>
</form>
 </div>
</div>
@endsection