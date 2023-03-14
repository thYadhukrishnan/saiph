@extends('frontend.adminlayout')
@section('admin-container')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<form action="{{route('imgedit')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ encrypt($image->id) }}">
  <div class="form-group">
    <label >Text</label>
    <input type="text" name="text" value="{{$image->text}}" class="form-control"  aria-describedby="emailHelp" placeholder="Enter text">
    @error('text')<p class="alert-danger">{{$message}}</p>@enderror
  <div class="form-group">
    <label >Image</label>
    <input type="file" value="{{$image->image}}"name="image" class="form-control"  >
    <img src="{{asset('storage/images/'.$image->image)}}" width="100px">
  </div>
  <div class="input_field_bknw mr-18">
       <div class="form-group">
               
                            <select name="type" class="form-control minimal" >
                                                
                                                <option value="1" @if($image->type==1) selected="selected" @endif>1</option>
                                                <option value="2" @if($image->type==2) selected="selected" @endif>2</option>
                                                <option value="3" @if($image->type==3) selected="selected" @endif>3</option>
                                                <option value="4" @if($image->type==4) selected="selected" @endif>4</option>
                                                <option value="5" @if($image->type==5) selected="selected" @endif>5</option>
                                            </select>
              </div>
              </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection