@extends('layouts.newapp2')

@section('content')
<style>
h4 {
	color: white;
}

.button {
    background-color: blue; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer; 
}

#myNavbar {
  color: white;
  font-size: 12px;
}
#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 60%;
  font-size: 12px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 12px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}


</style>

<br><br>


<button class="btn btn-primary"><H3>Employer Information</H3></button><br><br><br>

<h3>Post and edit jobs</h3><i>
<h4>See your post applications and have access to all other applications posted on the site</i></h4>
<br>
<h3>Download resumes</h3><br>
<h3>On your website</h3>
<h4><i>Do you need a career page on your site? No problem, we can install it for you</i></h4>
<h4><i>using your own template</i></h4>
<br>

</div>

</div>

@endsection

@section('content3')

<h4>FILL OUT FORM BELOW</h4>
@endsection

@section('content2')

<div class="row" id = "form">

<div class="col-md-8 col-md-offset-2">

<button class="btn btn-primary"><H3>We will contact you by email</H3></button><br><br>

{!! Form::open(['method'=>'POST', 'action'=>'EmployersController@store'])!!}

<div class="form-group">
  {!! Form::label('name', 'Name:') !!}
  {!! Form::text('name', null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('email', 'Email:') !!}
  {!! Form::email('email', null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('phone', 'Phone:') !!}
  {!! Form::number('phone', null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('body', 'Specifics that you need:') !!}
  {!! Form::textarea('body', null,['class'=>'form-control']) !!}
</div>


 <input type="radio" name="careerpage" value="yes" unchecked> I need a career page on my website<br><br>
 
<div class="form-group">
  {!! Form::submit('Submit',['class'=>'btn btn-primary btn-lg']) !!}
</div>


{!! Form::close() !!}

	</div>

		</div>


    </div>
  </div>






@endsection