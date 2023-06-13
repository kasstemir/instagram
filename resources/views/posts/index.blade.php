@extends('layouts.app')

@section('content')
    <div class="container" style="padding-left: 80px;"  >
        @foreach($posts as $post)
            <div class="row">
                <div class="col-6 offset-3">
                    <a href="/profile/{{$post->user->id}}"><img src="/storage/{{$post->image}}" alt="" class="w-100"></a>
                </div>
            </div>

            <div class="row">

                <div class="col-6 offset-3 pt-2 pb-4">
                    <div>
                        <p><span class="pe-1" style="font-weight: bold"><a class="text-dark" href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></span>{{$post->caption}}</p>
                    </div>
                </div>
            </div>
        @endforeach
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    {{$posts->links('pagination::bootstrap-4')}}
                </div>
            </div>
    </div>
@endsection
