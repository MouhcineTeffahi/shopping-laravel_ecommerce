@extends('layout.main')

@section('content')
<div class="container">
  <div class ="row">
      <div class="col-md-6 col-md-push-3 marge_form_payament">
  {!! Form::open(['route' => 'address.store','method' => 'post'])!!}

  <div class="form-group">
      {{ Form::label('addressline', 'Address Line') }}
      {{ Form::text('addressline', null, array('class' => 'form-control')) }}
  </div>

  <div class="form-group">
      {{ Form::label('city', 'City') }}
      {{ Form::text('city', null, array('class' => 'form-control')) }}
  </div>

  <div class="form-group">
      {{ Form::label('state', 'State') }}
      {{ Form::text('state', null, array('class' => 'form-control')) }}
  </div>

  <div class="form-group">
      {{ Form::label('zip', 'Zip') }}
      {{ Form::text('zip', null, array('class' => 'form-control')) }}
  </div>

  <div class="form-group">
      {{ Form::label('country', 'Country') }}
      {{ Form::text('country', null, array('class' => 'form-control')) }}
  </div>

  <div class="form-group">
      {{ Form::label('phone', 'Phone') }}
      {{ Form::text('phone', null, array('class' => 'form-control')) }}
  </div>

  {{ Form::submit('Procced to payment', array('class' => 'btn btn-info')) }}

  {!! Form::close() !!}
  </div>
</div>
</div>

@endsection
