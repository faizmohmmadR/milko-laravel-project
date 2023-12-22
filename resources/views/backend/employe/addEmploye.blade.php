<?php

use App\Models\Address;
use App\Models\Branch;

     $addresses = Address::all();
     $branches = Branch::all();
?>

@extends('backend.dashboard.index')
@section('contents')
<div class="container-fluid" style="padding: 10px;">
<h3 style="text-align: center;">Add employe</h3>
  <div class="card-body">
  <form action="{{route('employe.store')}}" method="POST" style="width: 80vh;margin: 0px auto">
  @csrf
     <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Employe Name</label>
         <input type="text" name="employeName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         @error('employeName')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Employe LName</label>
         <input type="text" name="employeLastName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         @error('employeLastName')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">employe Father Name</label>
         <input type="text" name="employeFatherName" class="form-control" id="exampleInputPassword1">
         @error('employeFatherName')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">employe Phone</label>
         <input type="text" name="employePhone" class="form-control" id="exampleInputPassword1">
         @error('employePhome')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Employe Email</label>
         <input type="email" name="employeEmail" class="form-control" id="exampleInputPassword1">
         @error('employeEmail')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Employe SSN</label>
         <input type="text" name="employeSSN" class="form-control" id="exampleInputPassword1">
         @error('employeSSN')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>
     
     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Employe Job Type </label>
         <input type="text" name="employeJobType" class="form-control" id="exampleInputPassword1">
         @error('employeJobType')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">employe Address</label>
         <select name="employeAddress" id="">
               @foreach($addresses as $address)
               <option value="{{$address->id}}"> {{$address->streetNumber}} {{$address->streetName}} {{$address->district}}</option>
               @endforeach
         </select>
         @error('employeAddress')
              <p class="text-danger">{{ $message }}</p>
         @enderror

     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Branch</label>
         <select name="branch" id="">
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