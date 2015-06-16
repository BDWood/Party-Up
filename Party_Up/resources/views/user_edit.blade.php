@extends('app')

@section('content')
<div class="form-container">
    <div class="form">
        <h1>Update User</h1>

        @if($errors->count() > 0)
        <div class="errors">
            @foreach($errors->all() as $error)
            <div>{{ $error }}</div>
            @endforeach
        </div>
        @endif

        <form action="{{ URL::to('user') }}/{{$user->id}}/edit" method="POST">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
            <div><span>Region: </span><input type="text" name="region" value="{{ $user->region }}"></div>
            <div><span>Play Style: </span><input type="text" name="play_style" value="{{ $user->play_style }}"></div>
            <div><span>Email: </span><input type="text" name="email" value="{{ $user->email }}"></div>
            <div><span>Date of Birth: </span><input type="text" name="date_of_birth" value="{{ $user->date_of_birth }}"></div>
            <div><span>Add an Image: </span><input type="text" name="image" value="{{ $user->image }}"></div>
            <div><span>Bio: </span><textarea name="bio" cols="30" rows="10">{{ $user->bio }}</textarea></div>

            <div><button>Save</button></div>
        </form>
    </div>
</div>
@endsection