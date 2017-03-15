@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                  {{ Form::model($user, ['route' => ['user.update', $user->id]]) }}

                    {{Form::hidden('_method', 'PUT')}}
                    <div class="form-input">
                      {{Form::label('name', 'Name')}}
                      {{Form::text('name', $user->name)}}
                    </div>
                    <div class="form-input">
                      {{Form::label('email', 'E-Mail')}}
                      {{Form::text('email', $user->email)}}
                    </div>
                    {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
                  {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
