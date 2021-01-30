@extends('layout.layout')
@section('title')
    <title>{{Auth::user()->name}} profile</title>
@endsection
@section('content')
<div class="container form">
    <div class="row justify-content-center">
    <div class="col-sm-4">
        @if ($profiledata->image == null)
                   <img src="svg/ice-cream.svg" height="100px" class="profimg"/>
                   <hr>
                   <form method="POST" action="{{route('image')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <input type="file" class="form-control-file" name="img">
                    </div>
                    <button type="submit" class="btn btn-primary">Image Upload</button>
                  </form>
        @else
        <img src="images/{{$profiledata->image}}" height="200px" class="profimg"/>
        <hr>
        <form method="POST" action="{{route('image')}}" enctype="multipart/form-data">
         @csrf
         <div class="form-group">
           <input type="file" class="form-control-file" name="img">
         </div>
         <button type="submit" class="btn btn-primary">Image Update</button>
       </form>
        @endif
    </div>
    <div class="col-sm-4">
        <h1>{{$profiledata->name}}</h1>
    </div>
    <div class="col-sm-4">
        <h3>Friends number: {{$profiledata->friends->count()}}</h3>
    </div>
</div>
</div>
<land />
@endsection
