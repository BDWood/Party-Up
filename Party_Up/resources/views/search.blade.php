@extends('app');

@section('content');

<form action="{{ URL::to('user') }}/{{$user->id}}/edit" method="POST">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
    <div><span>Game </span><input type="text" name="{{ $game->name }}"></div>
    <div><span>Console: </span><input type="text" name="image" value="{{ $user->image }}"></div>
    <div><span>Activity: </span><input type="text" name="Activity"></div>
    <div><span>Region: </span><input type="text" name="region" value="{{ $user->region }}"></div>
    <div><span>Play Style: </span><input type="text" name="play_style" value="{{ $user->play_style }}"></div>
    <div><span>Age: </span><input type="text" name="email" value="{{ $user->email }}"></div>

    <div><button>Save</button></div>
</form>

@endsection;