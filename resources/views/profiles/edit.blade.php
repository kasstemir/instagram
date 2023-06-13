@extends('layouts.app')

@section('content')
    <div class="container" style="padding-left: 80px">
        <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h3>Edit Profile</h3>
                    </div>
                    <div class="row mb-3">
                        <label for="title" class="col-md-4 col-form-label">Title</label>
                        <input id="title"
                               name="title"
                               value="{{old('title')??$user->profile->title}}"
                               type="text"
                               class="form-control @error('title') is-invalid @enderror"
                               >

                        @if ($errors->has('image'))
                            <strong>{{ $errors->first('image') }}</strong>
                        @endif
                    </div>
                    <div class="row mb-3">
                        <label for="description" class="col-md-4 col-form-label">Description</label>
                        <input id="description"
                               name="description"
                               value="{{old('title')??$user->profile->description}}"
                               type="text"
                               class="form-control @error('description') is-invalid @enderror"
                               >

                        @if ($errors->has('image'))
                            <strong>{{ $errors->first('image') }}</strong>
                        @endif
                    </div>
                    <div class="row mb-3">
                        <label for="url" class="col-md-4 col-form-label">Url</label>
                        <input id="url"
                               name="url"
                               value="{{old('title')??$user->profile->url}}"
                               type="text"
                               class="form-control @error('url') is-invalid @enderror"
                               >

                        @if ($errors->has('image'))
                            <strong>{{ $errors->first('image') }}</strong>
                        @endif
                    </div>
                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label">Profile Image</label>

                        <input type="file" class="form-control" id="image" name="image">
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row pt-4">
                        <button class="btn btn-primary" style="max-width: 150px">Save Changes</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
