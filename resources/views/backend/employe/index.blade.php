@extends('backend.dashboard.index')

@section('contents')
<div class="container-fluid" style="padding: 10px; background-color: gray">
  <div class="card-header" style="display: flex;justify-content: space-between;align-items: center" >
   <h3> Employies</h3>
    <a href="{{route('employe.create')}}" class="btn btn-success float-right" style="align-items: end;">Add Employies</a>
</div>
  <div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <!-- <th>No </th> -->
                <th>emp Name </th>	
                <th>emp LName </th>	
                <th>emp FName </th>	
                <th>emp Phone </th>	
                <th>emp Email </th>	
                <th>emp SSN </th>	
                <th>emp JobType </th>	
                <th>emp Address </th>	
                <th>branch </th>

            </tr>
        </thead>
        <tbody>
            @foreach($employes as $employe)
            <tr>
                <!-- <td>{{$employe->id}}</td> -->
                <td>{{$employe->employeName}}</td>	
                <td>{{$employe->employeLastName}}</td>	
                <td>{{$employe->employeFatherName}}</td>	
                <td>{{$employe->employePhone}}</td>	
                <td>{{$employe->employeEmail}}</td>	
                <td>{{$employe->employeSSN}}</td>	
                <td>{{$employe->employeJobType}}</td>	
                <td>{{$employe->employeAddress}}</td>	
                <td>{{$employe->branch}}</td>
               
                <th><a href="{{route('employe.edit',['employe'=>$employe->id])}}">Edit</a>|

                <form action="{{route('employe.edit',['employe'=>$employe->id])}}" method='POST' style="width: 80vh;margin: 0px auto">
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