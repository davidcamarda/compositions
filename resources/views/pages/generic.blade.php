@extends('me')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					Generic Garbage page. <br />
                    {{$first}} {{$last}}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
