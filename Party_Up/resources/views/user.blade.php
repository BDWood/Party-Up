@extends('app')

@section('content')

    <div class="content-container">
        <main class="user">
            <div class="profile-img">
                <img src="" alt="">
            </div>
            <div class="about-me">
                <h1>Welcome {{ $user->username }}</h1>
                <div>Email: {{ $user->email }}</div>
                <div>Date of Birth: {{ $user->date_of_birth }}</div>
                <div>Region: {{ $user->region }}</div>
                <div>Play Style: {{ $user->play_style }}</div>
                <div>Add your <a href="/games/{{$user->id}}">Games</a> here.</div>
                <div class="bio">
                    Bio: {{ $user->bio }}
                </div>
                <div class="bio edit"><a href="user/{{ $user->id }}/edit">Edit</a> your Bio here.</div>
            </div>
        </main>
    </div>
    <div class="about-container">
        <div class="about">
            <h1>Are You Active?</h1>
            <span>Choose the game you're currently playing and help people find you.</span>
            <div>
                <form action="/user">
                    @foreach($games as $game)
                        <div>{{ $game->name }}</div> 
                        <div>Active: <input type="radio" name="active" 
                            value="{{ $game->user()->where('active', '=', '')->get() }}">

                        </div>
                    @endforeach
                    <div class="inactive">Inactive: <input type="radio" name="active" value="0">

                    </div>
                    <button>Submit</button>
                </form>
                

            </div>
        </div>
    </div>

@endsection