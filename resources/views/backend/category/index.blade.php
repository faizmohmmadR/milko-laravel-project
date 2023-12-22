@extends('backend.dashboard.index')

@section('contents')
<div class="container-fluid" style="padding: 10px; background-color: gray">
  <div class="card-header" style="display: flex;justify-content: space-between;align-items: center" >
   <h3> Category</h3>
    <a href="{{route('category.create')}}" class="btn btn-success float-right" style="align-items: end;">Add Category</a>
</div>
  <div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Category Name</th>
                <!-- <th>Street Name</th> -->

            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->categoryName }}</td>
                <th><a href="{{route('category.edit',['category'=>$category->id])}}">Edit</a>|

                <form action="{{route('category.destroy',['category'=>$category->id])}}" method='POST' style="width: 80vh;margin: 0px auto">
                  @csrf
                  @method('DELETE')
                     <input type="submit" placeholder="delete">
                </form>    
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection


@section('script')
<script>

    $('.delete').click(function(){
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

            var id = $(this).attr('id');
            
            var url = 'address/'+id;

            $.ajax({
                headers: {'X-SCRF-TOKEN': $('meta[name="csrf-token:"]').attr('content')},
                url: url,
                type: 'DELETE',
                dataType: 'json',
                data: {"_method": 'DELETE',},
                success: function(data){
                    location.reload()
                }
            })


            // Swal.fire({
            //   title: "Deleted!",
            //   text: "Your file has been deleted.",
            //   icon: "success"
            // });
          }
        });

    })
    
    </script>

@endsection