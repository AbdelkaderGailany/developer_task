@extends('layout')
@section('content')
<div class="container login-container w-50 mt-5">
    <h2 class="text-center">Login</h2>
    <form id="loginForm">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" required>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember Me</label>
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
</div>


@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#loginForm').submit(function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'http://localhost:8000/api/login',
            data: JSON.stringify({ email: $('#email').val(), password: $('#password').val() }),
            contentType: 'application/json',
            success: function(response) {
                alert(response.message);
            },
            error: function() {
                alert('Login failed.');
            }
        });
    });
</script>
@endsection