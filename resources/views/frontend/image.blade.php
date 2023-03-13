@extends('frontend.adminlayout')
@section('admin-container')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<form action="{{route('imgupload')}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label >Text</label>
    <input type="text" name="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter text">

  <div class="form-group">
    <label >Image</label>
    <input type="file" name="image" class="form-control"  >
  </div>
  <div class="input_field_bknw mr-18">
       <div class="form-group">
               
                            <select name="type" class="form-control minimal" >
                                                <option class="hidden"  selected > Type</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
              </div>
              </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection