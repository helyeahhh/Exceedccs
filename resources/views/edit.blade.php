@extends('parent')

@section('csv_data')
<div align="right">
	<a href="{{ route('crud.index') }}" class="ui grey button">Back</a>
</div>
<br />

<form class="ui form" method="post" action="{{ route('crud.update', $data->id) }}" enctype="multipart/form-data">

	@csrf
	@method('PATCH')
	<div class="field ui grid">
		<label class="four wide column text-right">Enter First Name</label>
		<div class="eight wide column">
			<input type="text" name="first_name" value="{{ $data->first_name }}" class="form-control input-lg" />
		</div>
	</div>

	<div class="field ui grid">
		<label class="four wide column text-right">Enter Last Name</label>
		<div class="eight wide column">
			<input type="text" name="last_name" value="{{ $data->last_name }}" class="form-control input-lg" />
		</div>
	</div>
	<div class="field ui grid">
		<label class="four wide column text-right">Result</label>
		<div class="eight wide column">
			<input type="text" name="result" value="{{ $data->result }}" class="form-control input-lg" />
		</div>
	</div>

	<div class="field ui grid">
		<label class="four wide column text-right">Select Profile Image</label>
		<div class="eight wide column">
			<input type="file" name="image" />
			<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
			<input type="hidden" name="hidden_image" value="{{ $data->image }}" />
		</div>
	</div>
	<div class="ui grid field">
		<div class="four wide column">
			<input type="submit" name="edit" class="ui primary button" value="Edit" />
		</div>
	<div class="field ui grid">
</form>
@endsection



