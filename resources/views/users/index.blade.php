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
                <div class="panel-heading">User Dashboard</div>
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
                          <a href="{{action('UsersController@edit', $user->id)}}" class="btn btn-primary">Edit</a>
                          <span class="text-danger">
                            {{ Form::model($user, ['route' => ['user.delete', $user->id], 'style' => 'display: inline-block']) }}
                              {{Form::hidden('_method', 'DELETE')}}
                              {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {{ Form::close() }}
                          </span>
                        </div>
                      </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
