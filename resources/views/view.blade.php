@extends('parent')

@section('csv_data')

<div class="ui container text-center" align="center">
	<div align="right">
		<a href="{{ route('crud.index') }}" class="ui grey button">Back</a>
	</div>
	<br />
	<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="ui medium image" />
	<h3>First Name - {{ $data->first_name }} </h3>
	<h3>Last Name - {{ $data->last_name }}</h3>
</div>
@endsection
