@extends('me')
@section('page_title')
    GENRES
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">GENRES</div>
                    <div class="panel-body">

                        Genres

                    @foreach ($genres AS $genre)
                        <div class="row">
                            <div class="col-md-3 ">
                                Genre:
                            </div>
                            <div class="col-md-6 ">
                                {{$genre->name}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 ">
                                Description:
                            </div>
                            <div class="col-md-6 ">
                                {{$genre->description}}
                                </div>
                            </div>
                        </div>
                        <hr />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
     @stop
@endsection
@section('javascript')
    <script></script>
@stop

