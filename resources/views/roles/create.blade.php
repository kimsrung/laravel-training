@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Role Form</div>
                <div class="panel-body">
                  {{ Form::open(['url' => route('role.save'), 'method' => 'POST']) }}

                    {{Form::customInput('Name', 'name', ['class'=>'form-control'], $errors)}}

                    {{Form::customInput('Description', 'description', ['class'=>'form-control'], $errors)}}

                    {{Form::submit('Save', ['class' => 'btn btn-primary'])}}
                  {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
