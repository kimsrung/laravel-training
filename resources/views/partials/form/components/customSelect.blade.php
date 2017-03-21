<div class="form-group">
  <label for="{{$name}}">{{$label}}</label>
  {{Form::select($name, $choices, $value, $attributes)}}

  @include('partials.form.components.errors', ['errors' => $errors, 'name' => $name])
</div>
