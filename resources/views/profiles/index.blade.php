@extends('layouts.app')

@section('content')
    <div class="container" style="padding-left: 80px">
        <div class="row">
            <div class="col-3">
                <img src="{{$user->profile->profileImage()}}" class="rounded-circle w-75">
            </div>

            <div class="col-9" >
                <div class="d-flex justify-content-between align-items-baseline pb-3">
                    <div class="d-flex align-items-center">
                        <h3>{{$user->username}}</h3>
                        <follow-button user-id="{{$user->id}}" follows="{{$follows}}">

                        </follow-button>
                    </div>
                    @can('update',$user->profile)
                        <a href="/p/create" style="color:black; text-decoration: none">New Post</a>
                    @endcan
                </div>
                @can('update',$user->profile)
                    <a class="pt-2" href="/profile/{{$user->id}}/edit" style="color:black; text-decoration: none">Edit Profile</a>
                @endcan
                <div class="d-flex pt-3">
                    <div class="pe-5"><strong>{{ $postCount }}</strong> posts</div>
                    <div class="pe-5"><strong>{{ $followersCount }}</strong> followers</div>
                    <div class="pe-5"><strong>{{ $followingCount }}</strong> following</div>
                </div>
                <div class="pt-3" style="font-weight: bold">{{$user->profile->title}}</div>
                <div>{{$user->profile->description}}</div>
                <div><a href="">{{$user->profile->url}}</a></div>
            </div>
        </div>

        <div class="row pt-5">
        @foreach($user->posts as $post)
                <div class="col-4 d-flex pt-4">
                    <a href="/p/{{$post->id}}">
                        <img src="/storage/{{$post->image}}" class="w-100">
                    </a>
                </div>
        @endforeach
        </div>
    </div>
@endsection
