@extends('layout.app')


@section('content')
<a href="/posts"><button type="button" class="btn btn-default btn-outline-dark">Back</Button></a>
<h1>{{$post->title}}</h1>

<div>
    {!!$post->body!!}
</div>    
<hr><small>Written on {{$post->created_at}}</small>

@endsection