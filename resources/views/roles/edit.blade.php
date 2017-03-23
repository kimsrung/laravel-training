@extends('layouts.app')

@section('content')
<!-- @if (count($errors) > 0)
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                  {{ Form::model($user, ['route' => ['user.update', $user->id]]) }}

                    {{Form::hidden('_method', 'PUT')}}

                    {{Form::customInput('Name', 'name', ['class'=>'form-control'], $errors)}}

                    {{Form::customInput('E-Mail', 'email', ['class'=>'form-control'], $errors)}}

                    {{Form::customSelect('Role', 'role_id', $roles, ['class'=>'form-control'], $errors)}}

                    {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
                  {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
