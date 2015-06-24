@extends('app')

@section('content')

<div class="list-container search-result">
    <h1>Your Search Results</h1>
    <main>
        @foreach($matching_users as $user)  
            <div class="media-object">
                <div class="graphic">
                    
                </div>
                <div class="content">
                    <div><span class="label">Username:</span> {{ $user->username }}</div>
                    <div><span class="label">Region:</span> {{ $user->region }}</div>
                    <div><span class="label">Age:</span> {{ $user->getAge() }}</div>
                    <div><span class="label">Activity:</span> VOG Raid</div>
                </div>
            </div>
        @endforeach
    </main>
</div>

@endsection