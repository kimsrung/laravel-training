<div class="form-group">
  <label for="{{$name}}">{{$label}}</label>
  {{Form::text($name, $value, $attributes)}}

  @include('partials.form.components.errors', ['errors' => $errors, 'name' => $name])
</div>