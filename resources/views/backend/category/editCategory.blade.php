@extends('backend.dashboard.index')
@section('contents')
<div class="container-fluid" style="padding: 10px;">
<h3 style="text-align: center;">Update Category</h3>
  <div class="card-body">
  <form action="{{route('category.update',['category' => $categories->id])}}" method="POST" style="width: 80vh;margin: 0px auto">
  @csrf
  @method('PUT')
     <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Category Name</label>
         <input type="text" name="categoryName" value="{{$categories->categoryName}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         @error('categoryName')
              <p class="text-danger">{{ $message }}</p>
         @enderror
     </div>
     <button type="submit" class="btn btn-primary">Submit</button>
</form>
 </div>
</div>
@endsection