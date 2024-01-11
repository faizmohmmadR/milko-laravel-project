<?php

use App\Models\Address;
use App\Models\Branch;

     $addresses = Address::all();
     $branches = Branch::all();
?>

@extends('backend.dashboard.index')
@section('contents')
<div class="container-fluid" style="padding: 10px;">
<h3 style="text-align: center;">update employe</h3>
<hr>
  <div class="card-body">
  <form action="{{route('employe.update',['employe' =>$employe->id])}}" method="POST" style="width: 80vh;margin: 0px auto">
  @csrf
  @method('PUT')
     <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">employe name</label>
         <input type="text" name="employeName" value="{{$employe->employeName}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         @error('employeName')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">employe lastname</label>
         <input type="text" name="employeLastName" value="{{$employe->employeLastName}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         @error('employeLastName')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">employe father name</label>
         <input type="text" name="employeFatherName" value="{{$employe->employeFatherName}}" class="form-control" id="exampleInputPassword1">
         @error('employeFatherName')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">employe phone</label>
         <input type="text" name="employePhone" value="{{$employe->employePhone}}" class="form-control" id="exampleInputPassword1">
         @error('employePhome')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">employe email</label>
         <input type="email" name="employeEmail" value="{{$employe->employeEmail}}" class="form-control" id="exampleInputPassword1">
         @error('employeEmail')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">employe SSN</label>
         <input type="text" name="employeSSN" value="{{$employe->employeSSN}}" class="form-control" id="exampleInputPassword1">
         @error('employeSSN')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>
     
     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">employe Job type </label>
         <input type="text" name="employeJobType" value="{{$employe->employeJobType}}" class="form-control" id="exampleInputPassword1">
         @error('employeJobType')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">employe address</label>
         <select name="employeAddress" class="form-select form-select-sm" value="{{$employe->employeAddress}}" id="">
               @foreach($addresses as $address)
               <option value="{{$address->id}}" {{$employe->addressID == $address->id ? 'selected' : ''}} > {{$address->streetNumber}} {{$address->streetName}} {{$address->district}}</option>
               @endforeach
         </select>
         @error('employeAddress')
              <p class="text-danger">{{ $message }}</p>
         @enderror

     </div>

     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Branch</label>
         <select name="branch" class="form-select form-select-sm" value="{{$employe->branch}}" id="">
               @foreach($branches as $branch)
                    <option value="{{$branch->id}}" {{$employe->branchID == $branch->id ? 'selected' : ''}}>{{$branch->branchName}}</option>
               @endforeach
         </select>
         @error('branch')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <button type="submit" class="btn btn-primary">Update</button>
</form>
 </div>
</div>
@endsection