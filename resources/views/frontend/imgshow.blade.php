@extends('frontend.adminlayout')
@section('admin-container')
<h5> show image</h5>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Text</th>
      <th scope="col">Image</th>
      <th scope="col">Type</th>
    </tr>
  </thead>
  <tbody>
    @foreach($images as $image)
    <tr>
      <th scope="row">{{$images->firstItem() + $loop->index}}</th>
      <td>{{ $image->text }}</td>
      <td><img src="{{asset('storage/images/'.$image->image)}}" width="100px"></td>
      <td>{{ $image->type }}</td>

      <td>
        <a href="{{route('imgupdate', encrypt($image->id))}}" class="btn btn-primary">Edit</a>
        <a href="{{ route('imgdelete', encrypt($image->id)) }}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div>{{$images->links()}}</div>
<div width="30px">
<a href="{{route('image')}}" class="btn btn-primary">Add</a>
</div>


@endsection