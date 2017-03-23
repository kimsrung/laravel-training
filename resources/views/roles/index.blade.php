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
                <div class="panel-heading">
                  Role Dashboard
                  <a href="{{action('RolesController@create')}}" class="pull-right">Create New Role</a>
                </div>

                <div class="panel-body">
                  <div class="row">
                    <div class="col-xs-4">Name</div>
                    <div class="col-xs-4">Description</div>
                  </div>
                  @foreach ($roles as $role)
                    <hr>
                      <div class="row">
                        <div class="col-xs-4">{{ $role->name }}</div>
                        <div class="col-xs-4">{{ $role->description }}</div>
                        <div class="col-xs-4">
                          <a href="{{action('UsersController@edit', $role->id)}}" class="btn btn-primary">Edit</a>
                          <span class="text-danger">
                            {{ Form::model($role, ['route' => ['user.delete', $role->id], 'style' => 'display: inline-block']) }}
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
