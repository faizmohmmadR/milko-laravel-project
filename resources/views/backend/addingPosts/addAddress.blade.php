@extends('backend.dashboard.index')


@section('contents')
<div class="container-fluid" style="padding: 10px;">
<h3 style="text-align: center;">Add Address</h3>
  <div class="card-body">
  <form action="{{route('address.store')}}" method="POST" style="width: 80vh;margin: 0px auto">
  @csrf
     <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Street Number</label>
         <input type="number" name="streetNumber" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         @error('streetNumber')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>
     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Street Name</label>
         <input type="text" name="streetName" class="form-control" id="exampleInputPassword1">
         @error('streetName')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>
     <div class="mb-3">
         <label for="exampleCheck1" class="form-label">District</label>
         <input type="text" name="district" class="form-control" id="exampleCheck1">
         @error('district')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>
     <button type="submit" class="btn btn-primary">Submit</button>
</form>
 </div>
</div>
@endsection