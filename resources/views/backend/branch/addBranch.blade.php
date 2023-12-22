@extends('backend.dashboard.index')


@section('contents')
<div class="container-fluid" style="padding: 10px;">
<h3 style="text-align: center;">Add Branch</h3>
  <div class="card-body">
  <form action="{{route('branch.store')}}" method="POST" style="width: 80vh;margin: 0px auto">
  @csrf
     <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Branch Name</label>
         <input type="text" name="branchName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         @error('branchName')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Branch Address</label>
         <input type="text" name="branchAddress" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         @error('branchAddress')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <button type="submit" class="btn btn-primary">Submit</button>
</form>
 </div>
</div>
@endsection