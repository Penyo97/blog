@extends('layout.layout')

@section('title')
    <title>Main</title>
@endsection


@section('content')
@include('main.postinput')

@foreach ($posts as $post)
@php
 $count = 0
@endphp
<div class="container posts">
@if ($post->img != null)
    <img src="images/{{$post->img}}" style="height: 360px" class="img-fluid rounded"/>
@endif
<div class="col-sm-12">
    <h4>{{$post->text}}</h4>
</div>
<hr>
<div class="row">
    <div class="col-sm-6">
        <h5>{{$post->user}}</h5>
    </div>
    <div class="col-sm-6">
        <h5>{{$post->post_time}}</h5>
    </div>
</div>
<div class="col-sm-12">
    <form method="POST"  action="{{route('comment',['id' => $post->id])}}">
        @csrf
        <div class="form-group">
          <input type="text" class="form-control" name="text">
        </div>
        <div class="row">
            @foreach ($likes as $like)
                @if($post->id == $like->post_id)
                    @php
                     $count++
                    @endphp
                @endif
            @endforeach
        <a href="{{route('like',['id' => $post->id])}}" class="btn btn-primary">{{$count}} <i class="fas fa-thumbs-up"></i> Like</a>
        <button type="submit" class="btn btn-primary" style="margin-left: 20px"><i class="far fa-comment"></i> Comment</button>
        </div>
      </form>
</div>
<div class="col-sm-12">
    @foreach ($comments as $comment)
        @if ($post->id == $comment->post_id)
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h6>{{$comment->text}}</h6>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-6">
                           <p> {{$comment->user}}</p>
                        </div>
                        <div class="col-sm-6">
                            <p> {{$comment->comment_time}}</p>
                         </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</div>
</div>
@endforeach
<div class="container" style="margin-top: 20px">
    <div class="col-sm-12">
        {{ $posts->links() }}
    </div>
</div>
@endsection
