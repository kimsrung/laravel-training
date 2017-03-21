@extends('layouts.app')

@section('content')

@if(session('message'))
  <div class="alert alert-success">
    {{session('message')}}
  </div>
@endif
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-xs-4">Name</div>
                    <div class="col-xs-4">Email</div>
                  </div>
                  @foreach ($users as $user)
                    <hr>
                      <div class="row">
                        <div class="col-xs-4">{{ $user->name }}</div>
                        <div class="col-xs-4">{{ $user->email }}</div>
                        <div class="col-xs-4">
                          <a href="{{action('UsersController@edit', $user->id)}}">Edit</a>
                        </div>
                      </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
