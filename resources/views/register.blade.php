@extends('layout')
@section('content')
<div class="container registration-container w-50 mt-5">
    <h2 class="text-center">Register</h2>
    <form id="registrationForm">
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" required>
        </div>
        <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPassword" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Register</button>
    </form>
</div> 
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#registrationForm').submit(function(event) {
        event.preventDefault();
        const password = $('#password').val();
        const confirmPassword = $('#confirmPassword').val();

        if (password !== confirmPassword) {
            alert('Passwords do not match!');
            return;
        }

        $.ajax({
            type: 'POST',
            url: 'http://127.0.0.1:8000/api/register',
            data: JSON.stringify({ 
                name: $('#name').val(), 
                email: $('#email').val(), 
                password: password 
            }),
            contentType: 'application/json',
            success: function(response) {
                alert(response.message);
            },
            error: function() {
                alert('Registration failed.');
            }
        });
    });
</script>
@endsection