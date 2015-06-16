@extends('app')

@section('content')

<div class="list-container">
    <h1>Your Friends List</h1>
    <main>
        
        @foreach($user as $u) 
            <div class="media-object">
                <div class="graphic">
                    {{ $u->image }}
                </div>
                <div class="content">
                    <table>
                    <tr>
                        <th>Username</th>
                        <th>Region</th>
                        <th>Age</th>
                        <th>Date</th>
                    </tr>
                    <tr>
                        <td>{{ $u->username }}</td>
                        <td>{{ $u->region }}</td>
                        <td>{{ $u->age }}</td>
                        <td>{{ $u->date }}</td>
                    </tr>

                        
                    </table>
                </div>
            </div>
        @endforeach
        <div class="media-object">
            <div class="graphic">
                
            </div>
            <div class="content">
                This is the content for the media objects that represent the
                list items that users post to tell eachother that they are 
                playing a certain game.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur temporibus 
                exercitationem quia consectetur soluta at doloremque illo vero ex, quisquam.
                sed consequuntur, amet optio quasi aliquam qui quam, architecto saepe 
                exercitationem quia consectetur soluta at doloremque illo vero ex, quisquam.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur temporibus 
                sed consequuntur, amet optio quasi aliquam qui quam, architecto saepe 
                exercitationem quia consectetur soluta at doloremque illo vero ex, quisquam.
            </div>
        </div>
        <div class="media-object">
            <div class="graphic">
                
            </div>
            <div class="content">
                This is the content for the media objects that represent the
                list items that users post to tell eachother that they are 
                playing a certain game.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur temporibus 
                exercitationem quia consectetur soluta at doloremque illo vero ex, quisquam.
                sed consequuntur, amet optio quasi aliquam qui quam, architecto saepe 
                exercitationem quia consectetur soluta at doloremque illo vero ex, quisquam.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur temporibus 
                sed consequuntur, amet optio quasi aliquam qui quam, architecto saepe 
                exercitationem quia consectetur soluta at doloremque illo vero ex, quisquam.
            </div>
        </div>
        <div class="media-object">
            <div class="graphic">
                
            </div>
            <div class="content">
                This is the content for the media objects that represent the
                list items that users post to tell eachother that they are 
                playing a certain game.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur temporibus 
                exercitationem quia consectetur soluta at doloremque illo vero ex, quisquam.
                sed consequuntur, amet optio quasi aliquam qui quam, architecto saepe 
                exercitationem quia consectetur soluta at doloremque illo vero ex, quisquam.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur temporibus 
                sed consequuntur, amet optio quasi aliquam qui quam, architecto saepe 
                exercitationem quia consectetur soluta at doloremque illo vero ex, quisquam.
            </div>
        </div>
        <div class="media-object">
            <div class="graphic">
                
            </div>
            <div class="content">
                This is the content for the media objects that represent the
                list items that users post to tell eachother that they are 
                playing a certain game.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur temporibus 
                exercitationem quia consectetur soluta at doloremque illo vero ex, quisquam.
                sed consequuntur, amet optio quasi aliquam qui quam, architecto saepe 
                exercitationem quia consectetur soluta at doloremque illo vero ex, quisquam.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur temporibus 
                sed consequuntur, amet optio quasi aliquam qui quam, architecto saepe 
                exercitationem quia consectetur soluta at doloremque illo vero ex, quisquam.
            </div>
        </div>
        <div class="media-object">
            <div class="graphic">
                
            </div>
            <div class="content">
                This is the content for the media objects that represent the
                list items that users post to tell eachother that they are 
                playing a certain game.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur temporibus 
                exercitationem quia consectetur soluta at doloremque illo vero ex, quisquam.
                sed consequuntur, amet optio quasi aliquam qui quam, architecto saepe 
                exercitationem quia consectetur soluta at doloremque illo vero ex, quisquam.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur temporibus 
                sed consequuntur, amet optio quasi aliquam qui quam, architecto saepe 
                exercitationem quia consectetur soluta at doloremque illo vero ex, quisquam.
            </div>
        </div>
        <div class="media-object">
            <div class="graphic">
                
            </div>
            <div class="content">
                This is the content for the media objects that represent the
                list items that users post to tell eachother that they are 
                playing a certain game.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur temporibus 
                exercitationem quia consectetur soluta at doloremque illo vero ex, quisquam.
                sed consequuntur, amet optio quasi aliquam qui quam, architecto saepe 
                exercitationem quia consectetur soluta at doloremque illo vero ex, quisquam.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur temporibus 
                sed consequuntur, amet optio quasi aliquam qui quam, architecto saepe 
                exercitationem quia consectetur soluta at doloremque illo vero ex, quisquam.
            </div>
        </div>
        <div class="media-object">
            <div class="graphic">
                
            </div>
            <div class="content">
                This is the content for the media objects that represent the
                list items that users post to tell eachother that they are 
                playing a certain game.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur temporibus 
                exercitationem quia consectetur soluta at doloremque illo vero ex, quisquam.
                sed consequuntur, amet optio quasi aliquam qui quam, architecto saepe 
                exercitationem quia consectetur soluta at doloremque illo vero ex, quisquam.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur temporibus 
                sed consequuntur, amet optio quasi aliquam qui quam, architecto saepe 
                exercitationem quia consectetur soluta at doloremque illo vero ex, quisquam.
            </div>
        </div>
    </main>
</div>

@endsection