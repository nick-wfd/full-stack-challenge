@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Comments - {{ $referral->reference_no }}</h1></div>

                <div class="panel-body">
                    <div>
                        <a href="/referrals" class="btn btn-default pull-left">Back to Referrals</a>
                        <button data-toggle="modal" data-target="#addCommentModal" class="btn btn-primary pull-right">Create Comment</button>
                        <div class="clearfix"></div>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <table class="table">
                        <tr>
                            <th>User</th>
                            <th>Comment</th>
                        </tr>
                        @foreach($comments as $comment)
                        <tr>
                            <td>{{ $comment->user->name }} </td>
                            <td>{{ $comment->comment }} </td>
                        </tr>
                        @endforeach
                    </table>
                </div>

                <div class="panel-footer">
                    {{ $comments->links() }}
                </div>

            </div>
        </div>
    </div>

    @include('partials.addCommentModal')
</div>
@endsection
