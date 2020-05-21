@extends('parent')

@section('csv_data')
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<div align="right">
	<a href="{{ route('crud.index') }}" class="ui grey button">Back</a>
</div>

<form class="ui form" method="post" action="{{ route('crud.store') }}" enctype="multipart/form-data">

	@csrf
	<div class="field ui grid">
		<label class="four wide column text-right">Enter First Name</label>
		<div class="eight wide column">
			<input type="text" name="first_name" class="form-control input-lg" />
		</div>
	</div>
	<div class="field ui grid">
		<label class="four wide column text-right">Enter Last Name</label>
		<div class="eight wide column">
			<input type="text" name="last_name" class="form-control input-lg" />
		</div>
	</div>
	<div class="field ui grid">
		<label class="four wide column text-right">Positive or Negative?</label>
		<div class="eight wide column">
			<input type="text" name="result" class="form-control input-lg" />
		</div>
	</div>
	<div class="field ui grid">
		<label class="four wide column text-right">Select Profile Image</label>
		<div class="eight wide column">
			<input type="file" name="image" />
		</div>
	</div>
	<div class=" field ui grid">
		<div class="four wide column "></div>
		<div class="eight wide column text-center">
			<input type="submit" name="add" class="fluid ui primary button" value="Add" />
		</div>
</div>

</form>

@endsection



