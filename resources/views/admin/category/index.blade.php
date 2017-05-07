@extends('admin.layout.admin')

@section('content')

<div class="navbar-header">
    <a class="navbar-brand" href="#">Categories ==></a>
  </div>
  <ul class="nav navbar-nav">
    @if(!empty($categories))

  @forelse($categories as $category)

    <li><a href="{{route('category.show',$category->id)}}">{{$category->name}}</a></li>

    @empty
    <li>No data</li>

    @endforelse

    @endif

  </ul>

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
    Add Category
  </button>
  <div class="modal fade" tabindex="-1" role="dialog"  id="myModal">

    {!! Form::open(['route' => 'category.store','method' => 'post']) !!}
      {{ csrf_field() }}

<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title">Add Category</h4>
    </div>
    <div class="modal-body">
        <div class="form-group">

              {{ Form::label('name','Name') }}
              {{ Form::text('name',null, array('class' => 'form-control'))}}
        </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div><!-- /.modal-content -->



</div><!-- /.modal-dialog -->
  {!! Form::close() !!}
</div><!-- /.modal -->
  @if(!empty($products))
<section>
    <table class="table table-hover">
      <thead>
        <tr>

          <th>Products</th>

        </tr>

        <thead>
        <tbody>
          @forelse($products as $product)

          <tr>
              <td>{{$product->name}}</td>

          </tr>

          @empty
          <tr>
           <td>No data</td>
          </tr>
         @endforelse

        </tbody>
    </table>
</section>
  @endif

@endsection
