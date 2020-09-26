@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$author->name}}'s Posts @include('partials.createPostButton')</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($author->posts()->orderBy('created_at', 'desc')->get() as $post)
                    <li> <a href="/posts/{{ $post->id }}"> {{ $post->title }} </a> - {{ $post->created_at->diffForHumans() }} </li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
