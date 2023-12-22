@extends('backend.dashboard.index')
@section('contents')
<div class="container-fluid" style="padding: 10px;">
<h3 style="text-align: center;">Update Branch</h3>
  <div class="card-body">
  <form action="{{route('branch.update',['branch' => $branches->id])}}" method="POST" style="width: 80vh;margin: 0px auto">
  @csrf
  @method('PUT')
     <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Branch Name</label>
         <input type="text" name="branchName" value="{{ $branches->branchName}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         @error('branchName')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Branch Address</label>
         <input type="text" name="branchAddress" value="{{$branches->branchAddress}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         @error('branchAddress')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>

     <button type="submit" class="btn btn-primary">Submit</button>
</form>
 </div>
</div>
@endsection
