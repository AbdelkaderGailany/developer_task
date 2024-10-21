<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        
    </head>
    <body>
        <nav class="container mt-3">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" id="login-tab" href="{{route('login')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="register-tab" href="{{ route('register')}}">Register</a>
                </li>
            </ul>
        </nav>
        @yield('content')
        
        @yield('js')
        <script>
            const currentUrl = window.location.href;

            if (currentUrl.includes('login')) {
                document.getElementById('login-tab').classList.add('active');
                document.getElementById('register-tab').classList.remove('active');
            } else if (currentUrl.includes('register')) {
                document.getElementById('register-tab').classList.add('active');
                document.getElementById('login-tab').classList.remove('active');
            }

        </script>
    </body>
    
</html>