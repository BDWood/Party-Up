@extends('app')

@section('content')

<div class="form-container">
    <div class="form">
        <form action="{{ URL::to('search') }}" method="POST">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div>
                Game: <select name="game">
                    <option value=""></option>
                    <option value="1">Destiny-PSN</option>
                    <option value="2">Destiny-XBL</option>
                    <option value="3">Destiny-PC</option>
                    <option value="4">Borderlands-PSN</option>
                    <option value="5">Borderlands-XBL</option>
                    <option value="6">Borderlands-PC</option>
                    <option value="7">Call of Duty-PSN</option>
                    <option value="8">Call of Duty-XBL</option>
                    <option value="9">Call of Duty-PC</option>
                </select>
            </div>
            <div>
                Activity: <select name="activity" id="">
                    <option value=""></option>
                    <option value="">Dependent on Game(AJAX)</option>
                </select>
            </div>
            <div>
                Age: <select name="age">
                    <option value=""></option>
                    <option value="age">Adult(18 and up)</option>
                </select>
            </div>
            <div>
                Region: <select name="region">
                    <option value=""></option>
                    <option value="usa">USA</option>
                    <option value="china">China</option>
                    <option value="russia">Russia</option>
                    <option value="mexico">Mexico</option>
                    <option value="canada">Canada</option>
                    <option value="uae">UAE</option>
                    <option value="australia">Australia</option>
                </select>
            </div>
            <div>
                Play Style: <select name="play_style">
                    <option value=""></option>
                    <option value="casual">Casual</option>
                    <option value="hardcore">Hardcore</option>
                </select>
            </div>
            <button>Submit</button>
        </form>
    </div>
</div>
@endsection