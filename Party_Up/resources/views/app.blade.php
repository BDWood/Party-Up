<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Party-Up</title>
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Play:400,700|Orbitron:400,500,700,900' 
            rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="head-container">
            <header>
                <nav>
                    <a href="/home" class="logo">Party-Up</a>
                    @if (Auth::check())
                        <a class="button" href="/search">Search Players</a>
                        <a class="button" href="/archive/{id}">My Archive</a>
                        <a class="button" href="/user">My Account</a>
                        <a class="button" href="/auth/logout">Logout</a>
                    @endif
                    @if (!Auth::check())
                    <div>    
                        <a href="/auth/login" class="button">Login</a>
                        <a href="/auth/register" class="button">Sign Up</a>
                    </div>
                    @else
                    @endif
                </nav>
            </header>
        </div>

        @yield('content')

        <div class="foot-container">
        <footer>
            <div class="copyright">&copyParty-Up</div>
            <div class="contact">Contact us at 1-800-000-0000</div>
            <span class="disclaimer">None of the images and games on this site 
            are the property of Party-Up.com</span>
        </footer>
    </div>
    <script src="my_assets/js/main.js"></script>
    <script src="my_assets/js/slick.js"></script>
</body>
</html>