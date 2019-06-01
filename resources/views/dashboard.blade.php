@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    <a class="btn btn-default btn-outline-dark" href="/posts/create">Create Posts</a>
                    <h3>Your Blog Posts</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>