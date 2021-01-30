@extends('layout.layout')
@section('title')
<title>Friend</title>
@endsection

@section('content')
<div>
    <div class="container form">
        <div class="col-8 py-3 px-lg-5">
            @if ($users == "[]")
                <h1>Not exist</h1>
            @else
                    @foreach ($users as $user)
                        <div class="col-8">
                            <div class="row justify-content-center mx-lg-n5">
                             @if ($user->image == null)
                             <div class="col-4"><img src="svg/ice-cream.svg" height="200px" class="headerimg"/></div>
                             @else
                             <div class="col-4"><img src="images/{{$user->image}}" height="200px" class="profimg"/></div>
                            @endif
                            <div class="col-4 py-3 px-lg-5 "><h4>{{$user->name}}</h4></div>
                            <div class="col-4 py-3 px-lg-5 "><friendbutton id="{{$user->id}}"/></div>
                        </div>
                        </div>
                    @endforeach
            @endif
        </div>
    </div>
    <land/>
</div>
@endsection
