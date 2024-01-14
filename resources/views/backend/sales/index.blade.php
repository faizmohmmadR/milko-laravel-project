@extends('backend.dashboard.index')

@section('contents')
  <div class="card" style="border-radius: 0;margin: 15px; width: 100%">
  <div class="card-header" style="display: flex;justify-content:space-between;align-items:center">
    <h5>Sales</h5>
    <a href="{{route('sales.create')}}" class="btn btn-success">Add Sales</a>
  </div>
  <div class="card-body">
    <table class="table table-responsive">
        <thead>
            <tr>
                <th>No</th>
                <th>products</th>	
                <th>user</th>	
                <th>branch</th>	
                <th>category</th>	
                <th>customer</th>	
                <th>quantity</th>	
                <th>unite</th>	
                <th>unitePrice</th>
                <th>totalPrice</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sales as $sale)
            <tr>
                <td>{{$sale->id}}</td>
                <td>
                  <ul style="list-style-type: none;">
                      @foreach($sale->products as $product)
                      <li>
                        {{$product->ProductName}}
                      </li>
                      @endforeach
                  </ul>
                </td>	
                <td>{{$sale->user->name}}</td>	
                <td>{{$sale->branch->branchName}}</td>	
                <td>{{$sale->category->categoryName}}</td>	
                <td>{{$sale->customer->customerName}}</td>	
                <td>{{$sale->quantity}}</td>	
                <td>{{$sale->unite}}</td>	
                <td>{{$sale->unitePrice}}</td>
                <td>{{$sale->totalPrice}}</td>		
                <th> 
                  <a href="{{route('sales.edit',['sale'=>$sale->id])}}">
                  <div style="display: flex;justify-content:center;justify-content: center;align-items:center; color: blue">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                    </svg>
                    </a>
                    <span style="padding: 5px;">|</span>
                <!-- <form  action="{{route('sales.destroy',['sale'=>$sale->id])}}" method='POST' style="width: 80vh;margin: 0px auto"> -->
                <a href="#" class="delete" data-id="{{$sale->id}}">delete</a>
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
  e.preventDefault();

  var saleId = $(this).data('id');
  var url = 'sales/' + saleId;

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
        alert('test')
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



