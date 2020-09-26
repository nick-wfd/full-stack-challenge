@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All Posts @include('partials.createPostButton')</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($posts as $post)
                    <li> <a href="/posts/{{ $post->id }}"> {{ $post->title }} </a></li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
