@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row pad-top">
		<div class="col-12">
			<div id="new_connection_form">
				<h5>Add Connection</h5>
				<div class="row">
					<div class="col col-lg-12">
						<form id="new_connection_data" class="needs-validation" action="POST" novalidate>
							{{ csrf_field() }}
							<div class="form-row">
								<div class="col-md-4 mb-3">
									<div class="form-group">
										<label for="host">Host</label>
										<select class="form-control" name="host" id="host" required>
										@foreach($hosts as $host)
										<option value="{{$host->id}}">{{$host->name}}</option>
										@endforeach
										</select>
										<small class="form-text text-muted">What database cluster does the connection belong to</small>
									</div>
								</div>
								<div class="col-md-4 mb-3">
										<div class="form-group">
										<label for="display_name">Dispaly Name</label>
										<input type="text" class="form-control" name="display_name" id="display_name" required>
										<small class="form-text text-muted">How the connection will be shown in listings</small>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-4 mb-3">
								<div class="form-group">
									<label for="display_name">User</label>
									<input type="text" class="form-control" name ="mysql_user" id="mysql_user" required>
									<small class="form-text text-muted">MYSQL username</small>
								</div>
							</div>
							<div class="col-md-4 mb-3">
								<div class="form-group">
									<label for="display_name">Password</label>
									<input type="text" class="form-control" name="mysql_password" id="mysql_password" required>
									<small class="form-text text-muted">MYSQL password</small>
								</div>
								<button type="submit" id="add_connection" class="btn btn-primary float-right">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row pad-top">
		<div class="col-12">
			@foreach($connections as $group)
			<h5 class="pad-top">{{$group->name}}</h5>
			<ul class="list-group">
				@foreach($group->connections as $connection)
					<li class="list-group-item d-flex justify-content-between align-items-center">
						{{$connection->site_name}}
						<span class="badge badge-primary badge-pill">14</span>
					</li>
				@endforeach
			</ul>
			@endforeach
	
		</div>
	</div>

</div>

@endsection