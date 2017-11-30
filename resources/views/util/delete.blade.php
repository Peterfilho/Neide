  {!! Form::open(['method' => 'DELETE', 'route' => [$route, $model]]) !!}

  <div class="row">


    <div class="col s2 right ">
      <button type="submit" class="btn-floating btn-large waves-effect waves-light red">
        <i class="material-icons">delete</i>
    </div>

<div class="col s2 right">
  <a class="btn-floating btn-large waves-effect waves-light red darken-2" href="{{ url("/pessoas") }}">
    <i class="material-icons">arrow_back</i></a>
</div>


  </div>
  {!! Form::close() !!}
