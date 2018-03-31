{!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files' => 'true'])!!}

<div class="form-group">
  {!! Form::label('title', 'Title:') !!}
  {!! Form::text('title',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('location', 'Location:') !!}
  {!! Form::text('location',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('date_posted', 'Date Posted:') !!}
  {!!  Form::date('date_posted',null, \Carbon\Carbon::now()) !!} 
</div>

<div class="form-group">
  {!! Form::label('date_start', 'Starting date:') !!}
  {!!  Form::date('date_start', ['class' => 'form-control'])  !!}
</div>

<div class="form-group">
  {!! Form::label('body', 'Content:') !!}
  {!! Form::textarea('body',null,['class'=>'form-control', 'rows'=>'5']) !!}
</div>

<div class="form-group">
  {!! Form::label('category_id', 'Category:') !!}
  {!! Form::select('category_id',null, [''=>'Choose Options'] ,['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('photo_id', 'Photo:') !!}
  {!! Form::file('photo_id',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
</div>

{!! Form::close() !!}