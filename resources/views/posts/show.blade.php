@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" class="w-100" >
        </div>
        <div class="col-4">
           <div>
               <div class="d-flex" style="align-items:center;" align-items-center;>
                   <div style="padding-right:1rem">
                       <img src="{{auth()->user()->profile->profileImage()}}" class=" rounded-cirle w-100" style="max-width: 50px;">
                   </div>
                   <div>
                       <h3 style="font-weight: bold">
                            <a href="/profile/{{auth()->user()->id}}">
                               <span class="text-dark" style="border: none"> {{auth()->user()->username}}</span>
                            </a>
                       </h3>

                   </div>
                   <h4 style="padding-left: 1rem; font-weight: bold;"><a href="#">Follow</a></h4>
               </div>
               <hr>

            <p><span style="font-weight: bold">
                <a href="/profile/{{auth()->user()->id}}">
                    <span class="text-dark"> {{auth()->user()->username}}</span>
                 </a>
                </span>{{$post->caption}}</p>
        </div>
        </div>
    </div>

</div>

@endsection
