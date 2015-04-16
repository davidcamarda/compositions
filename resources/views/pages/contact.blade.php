@extends('me')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">CONTACT ME</div>

				<div class="panel-body">
					My Fucking Info <br />
                    {{$address}}
                    <br />
                    {{$phone}}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
