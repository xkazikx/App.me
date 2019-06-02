@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                   <strong>Dashboard</strong>
                </div>
                <div class="card-body">
                    <a class="btn btn-default btn-outline-dark" href="/posts/create">Create Posts</a>
                    <h3>Your Blog Posts</h3>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <strong>Posts</strong>
                </div>
                <div class="card-body">
                    <h3>Lorem ipsum dolor sit amet</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque et, quas pariatur fugiat quos maxime nulla suscipit adipisci autem quae maiores perspiciatis debitis odit reprehenderit iste tenetur iure ipsa molestias. </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>