@extends('frontend.adminlayout')
@section('admin-container')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<h5>Contacts Details</h5>


@if(session()->has('message'))
    <P>{{session()->get('message')}}</p>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Hotel</th>
      <th scope="col">State</th>
      <th scope="col">City</th>
      <th scope="col">Zip</th>
      <th scope="col">Booking</th>
      <th scope="col">Comments</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contacts as $contact)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{ $contact->name }}</td>
      <td>{{ $contact->email }}</td>
      <td>{{ $contact->phone }}</td>
      <td>{{ $contact->hotel }}</td>
      <td>{{ $contact->state }}</td>
      <td>{{ $contact->city }}</td>
      <td>{{ $contact->zip }}</td>
      <td>{{ $contact->booking }}</td>
      <td>{{ $contact->comments }}</td>
      <td>
        <a href="" class="btn btn-primary">Edit</a>
        <a href="{{ route('delete', encrypt($contact->id)) }}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection