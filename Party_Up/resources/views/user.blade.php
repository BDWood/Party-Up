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
                <div class="bio">
                    Bio: {{ $user->bio }}
                </div>
                <div class="bio edit"><a href="user/{{ $user->id }}/edit">Edit</a> your Bio here.</div>
            </div>
        </main>
    </div>

@endsection