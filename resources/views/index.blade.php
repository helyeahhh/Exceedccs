@extends('parent')

@section('csv_data')

<div align="right">
	<a class="ui orange button" href="{{ route('export') }}">Export Data</a>
	<a href="{{ route('crud.create') }}" class="ui positive button">Add</a>
</div>
<br />
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif


<table class="ui celled table">
	<tr>
		<th width="10%">Image</th>
		<th width="25%">First Name</th>
		<th width="25%">Last Name</th>
		<th width="20%">Result</th>
		<th width="30%">Action</th>
	</tr>
	@foreach($data as $row)
		<tr>
			<td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="ui small image" width="25" /></td>
			<td>{{ $row->first_name }}</td>
			<td>{{ $row->last_name }}</td>
			<td>{{ $row->result }}</td>
			<td>
				
				<form action="{{ route('crud.destroy', $row->id) }}" method="post">
					<div class="ui buttons">
						<a href="{{ route('crud.show', $row->id) }}" class="ui primary button">Show</a>
						<div class="or"></div>
						<a href="{{ route('crud.edit', $row->id) }}" class="ui yellow button">Edit</a>
						<div class="or"></div>
						@csrf
						@method('DELETE')
						<button type="submit" class="ui negative button">Delete</button>
					</div>
				</form>
			</td>
		</tr>
	@endforeach
</table>

{!! $data->links() !!}
@endsection