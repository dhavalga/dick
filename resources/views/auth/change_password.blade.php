@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">{{ trans('auth.change_password') }}</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							{{ trans('validation.whoops') }}<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/user/change-password') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">{{ trans('auth.old_password') }}</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="old_password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">{{ trans('auth.new_password') }}</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="new_password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">{{ trans('auth.confirm_password') }}</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="new_password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary ladda-button" data-style="zoom-in"><span class="ladda-label">{{ trans('auth.change_password') }}</span></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
