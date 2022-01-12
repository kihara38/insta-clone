@extends('layouts.app')

@section('content')
<div class="container">
    <div class="main d-flex">
        <div class="col-3 p-5" >
            <img src="/img/cyclists.png" alt="cyclists img" class="rounded-circle" style="height: 200px; width:200px">

        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div style="padding-right:1rem"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div style="padding-right:1rem"><strong>23</strong> followers</div>
                <div style="padding-right:1rem"><strong>234</strong> following</div>
            </div>
            <div class="pt-3" style="font-weight: 700" >{{$user->profile->title}}</div>
            <div style="width: 60%">{{$user->profile->description}}</i> </div>
               <div><a href="#">{{$user->profile->url}}</a></div>
        </div>

    </div>
    <div class="row pt-5">
        @foreach ($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img src="/storage/{{$post->image}}" class="w-100">
            </a>
        </div>
        @endforeach
    </div>



</div>
@endsection
