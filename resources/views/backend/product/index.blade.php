@extends('backend.dashboard.index')

@section('contents')
  <div class="card" style="border-radius: 0;margin: 15px; width: 100%">
  <div class="card-header" style="display: flex;justify-content:space-between;align-items:center">
    <h5>Product</h5>
    <a href="{{route('product.create')}}" class="btn btn-success">Add Product</a>
  </div>
  <div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>ProductName</th>
                <th>description</th>
                <th>price</th>
                <th>quantity</th>
                <th>unite</th>
                <th>user</th>
                <th>branch</th>
                <th>category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->ProductName}}</td>	
                <td>{{$product->description}}</td>	
                <td>{{$product->price}}</td>	
                <td>{{$product->quantity}}</td>	
                <td>{{$product->unite}}</td>	
                <td>{{$product->user->name}}</td>	
                <td>{{$product->branch->branchName}}</td>	
                <td>{{$product->category->categoryName}}</td>	
                <th> 
                  <a href="{{route('product.edit',['product'=>$product->id])}}">
                  <div style="display: flex;justify-content:center;justify-content: center;align-items:center; color: blue">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                    </svg>
                    </a>
                    <span style="padding: 5px;">|</span>
                   <a href="#" class="delete" data-id="{{$product->id}}">                 
                     <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                    </svg>
                </a>  
                </div>
              </th>  
              
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection


@section('script')
<script>
   $('.delete').click(function(e){

  var rout = $(this).data('id');
  var url = 'product/' + rout;

  Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!"
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: url,
        type: 'DELETE',
        dataType: 'json',
        success: function(data) {
          location.reload();
        },
        error: function(xhr, status, error) {
          location.reload();
        }
      });
    }
  });
});
</script>

@endsection