@extends('layouts.app')

@section('content')
    <div class="container" style="padding-left: 80px;"  >
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{$post->image}}" alt="" class="w-100">
            </div>
            <div class="col-4">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="pr-5">
                            <img src='{{$post->user->profile->profileImage()}}' class='w-100 rounded-circle' alt="" style="max-width: 40px">
                        </div>
                        <div class="d-flex">
                            <div class="ps-3" style="font-weight: bold"><a class="text-dark" href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></div>
                            <a class="ps-3" style="font-weight: bold" href="">Follow</a>
                        </div>
                    </div>
                    <hr>
                    <p><span class="pe-1" style="font-weight: bold"><a class="text-dark" href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></span>{{$post->caption}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
