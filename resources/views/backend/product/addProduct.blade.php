<?php

use App\Models\Address;
use App\Models\Branch;
use App\Models\Category;

     $categoryes = Category::all();
     $branches = Branch::all();
?>

@extends('backend.dashboard.index')
@section('contents')
<div class="container-fluid" style="padding: 10px;">
<h3 style="text-align: center;">Add Product</h3>
<hr>
  <div class="card-body">
  <form action="{{route('product.store')}}" method="POST" style="width: 80vh;margin: 0px auto" enctype="multipart/form-data">
  @csrf
     <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Product Name</label>
         <input type="text" name="ProductName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         @error('ProductName')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Description LName</label>
         <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         @error('description')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label"> Quantity</label>
         <input type="text" name="quantity" class="form-control" id="exampleInputPassword1">
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
         <label for="exampleInputPassword1" class="form-label">Price</label>
         <input type="text" name="price" class="form-control" id="exampleInputPassword1">
         @error('price')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <select name="branchID" class="form-select form-select-sm" aria-label="Small select example">
               <option selected>choose the branch</option>
               @foreach($branches as $branch)
                    <option value="{{$branch->id}}">{{$branch->branchName}}</option>
               @endforeach
         </select>
         @error('branchID')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>
     
     <div class="mb-3">
         <select name="categoryID" class="form-select form-select-sm" aria-label="Small select example">
               <option selected>choose the category</option>
               @foreach($categoryes as $category)
                    <option value="{{$category->id}}">{{$category->categoryName}}</option>
               @endforeach
         </select>
         @error('categoryID')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Image</label>
         <input type="file" name="image" >
         @error('image')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <button type="submit" class="btn btn-primary">Submit</button>
</form>
 </div>
</div>
@endsection