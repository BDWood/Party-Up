@extends('app')

@section('content')
<div class="form-container">
    <div class="form">
        <h1>Add Games To</h1>

        @if($errors->count() > 0)
        <div class="errors">
            @foreach($errors->all() as $error)
            <div>{{ $error }}</div>
            @endforeach
        </div>
        @endif

        <form action="{{ URL::to('games') }}/{{$user->id}}/" method="POST">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
            <div>
                <span>Game-Console: </span>
                <select name="game">
                    @foreach ($games as $game) 
                        <option value="{{ $game->id }}">{{ $game->name }}</option>
                    @endforeach
                </select>
            </div>
            <div><button>Save</button></div>
        </form>
    </div>
</div>
@endsection