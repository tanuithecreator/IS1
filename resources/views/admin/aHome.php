<!-- resources/views/admin/home.blade.php -->

@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Admin Home Page</h1>
        <div class="welcome-message">
            <p>Welcome, Admin!</p>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        </div>
        <!-- Add more content as needed -->
    </div>
@endsection
