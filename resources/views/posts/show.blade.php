@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Blog Post by {{ $post->user->name }} @include('partials.createPostButton')</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>{{ $post->title }} </h1>
                    <p> {{ $post->body }} </p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
