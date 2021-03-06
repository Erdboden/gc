@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (Auth::check())
                            Hello {{Auth::user()->name}}
                        @endif
                    </div>
                    <div class="content">
                        <div class="title m-b-md">
                            List of users
                        </div>
                        <ul>
                            @foreach($users as $user)
                            <li>{{$user->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
