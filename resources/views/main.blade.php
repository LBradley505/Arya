@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row pad-top">
		<div class="col-2">

			<div class="databases">
			@foreach ($cons as $key => $con)
				<h4>{{ $key }}</h4>
				<div class="list-group connection-list">
				@foreach ($con as $name => $connection)
					<a class="list-group-item list-group-item-action active" data-group="{{ $key }}" data-id="{{ $name }}">{{ $name }}</a>
				@endforeach
				</div>
			@endforeach
			</div>
	  	</div>
		<div class="col-10">
			{{-- <p>Enter SQL you wish to be executed here</p> --}}
			<div class="row" style="height: 100%; max-height:800px; margin-top:34px;">
				<div class="col-12">
					<div id="editor"></div>
					<input id="sql" style="display: none;" />
					<div id="overlay">
						<i class="fa fa-spinner fa-pulse" aria-hidden="true"></i>
					</div>
				</div>
					<div class="col-12">
						<button type="button" id="submit" class="btn btn-primary">Submit</button>
					</div>
			</div>
	  	</div>
	</div>
	<div class="row pad-top">
		<div class="col-12">
			<div id="feedback"></div>
		</div>
	</div>
</div>

@endsection