@extends('layouts.app')

@section('content')
<div class="container">
    <div class="main d-flex">
        <div class="col-3 p-5" >
            <img src="/img/cyclists.png" alt="cyclists img" class="rounded-circle" style="height: 200px; width:200px">

        </div>
        <div class="col-9 pt-5">
            <div><h1>insta_clone</h1></div>
            <div class="d-flex">
                <div style="padding-right:1rem"><strong>153</strong> posts</div>
                <div style="padding-right:1rem"><strong>23</strong> followers</div>
                <div style="padding-right:1rem"><strong>234</strong> following</div>
            </div>
            <div class="pt-3" style="font-weight: 700" >kiharanelson@nelki.com</div>
            <div style="width: 60%">We no longer need to fear arguments, confrontations or any kind of problems with ourselves or others.
                Even stars collide, and out of their crashing new worlds are born.
               <i>Today I know that this LIFE</i> </div>
               <div><a href="#">kiharanelson@nelki.com</a></div>
        </div>

    </div>
    <div class="col">
        <div class="row-4 pt-4">
            <img src="/img/rugby.png" alt="cart" style="width: 30%"; height="30%">
            <img src="/img/doctor.png" alt="cart" style="width: 30%"; height="30%">
            <img src="/img/home.png" alt="cart" style="width: 30%"; height="30%">
        </div>
    </div>



</div>
@endsection
