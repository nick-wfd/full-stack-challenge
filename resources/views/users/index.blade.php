@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Users</h1></div>

                <div class="panel-body">
                    <div>
                    	<a href="/users/create" class="btn btn-success pull-right">Create User</a>
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                        </tr>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }} </td>
                            <td>{{ $user->email }} </td>
                            <td>
                            @if($user->roles)
                            	<ul style="list-style:none;">
                            	@foreach($user->roles as $role)
                            	   <li>{{ ucfirst($role->name) }}</li>
                            	@endforeach
                            	</ul>
                            @endif
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>

                <div class="panel-footer">
                    {{ $users->links() }}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
