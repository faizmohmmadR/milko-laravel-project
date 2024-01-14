@extends('backend.dashboard.index')

@section('contents')
  <div class="card" style="border-radius: 0;margin: 15px; width: 100%">
  <div class="card-header" style="display: flex;justify-content:space-between;align-items:center">
    <h5>Customer</h5>
    <a href="{{route('customer.create')}}" class="btn btn-success">Add Customer</a>
  </div>
  <div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Cst Name</th>
                <th>Cst Father Name</th>
                <th>Cst Phone</th>
                <th>Cst Type</th>
                <th>Cst Address</th>
                <th>Cst Branch</th>
                <th>Edit/Delete</th>

            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->customerName }}</td>
                <td>{{ $customer->customerFatherName }}</td>
                <td>{{ $customer->customerPhone }}</td>
                <td>{{ $customer->CustomerType }}</td>
                <td>{{ $customer->address->streetNumber }},{{ $customer->address->streetName }},{{ $customer->address->district }}</td>
                <td>{{ $customer->branchInfo->branchName }}</td>
                
                <th> 
                  <a href="{{route('customer.edit',['customer'=>$customer->id])}}">
                  <div style="display: flex;justify-content:center;justify-content: center;align-items:center; color: blue">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                    </svg>
                    </a>
                    <span style="padding: 5px;">|</span>
                    <a href="#" class="delete" data-id="{{$customer->id}}">                 
                     <svg  style="color: red;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
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
  var url = 'customer/' + rout;

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