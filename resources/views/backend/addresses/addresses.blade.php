@extends('backend.dashboard.index')

@section('contents')
<div class="container-fluid" style="padding: 10px; background-color: gray">
  <div class="card-header" style="display: flex;justify-content: space-between;align-items: center" >
   <h3> Address</h3>
    <a href="{{route('address.create')}}" class="btn btn-success float-right" style="align-items: end;">Add Address</a>
</div>
  <div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Street Number</th>
                <th>Street Name</th>
                <th>District</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($addresses as $address)
            <tr>
                <td>{{ $address->id }}</td>
                <td>{{ $address->streetNumber }}</td>
                <td>{{ $address->streetName }}</td>
                <td>{{ $address->district }}</td>
                <th><a href="{{route('address.edit',['address'=>$address->id])}}">Edit</a>|<a href="#">Delete</a></th>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection