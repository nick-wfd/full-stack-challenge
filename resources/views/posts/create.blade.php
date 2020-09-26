@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Post</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @include('errors')
                    <form method="POST" action="/posts">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title" >Title : </label>
                            <input type="text" id="title" name="title" class="form-control" placeholder="Post Title"/>
                        </div>

                        <div class="form-group">
                            <label for="body" >Body : </label>
                            <textarea id="body" name="body" class="form-control" placeholder="Post content goes here..."></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
