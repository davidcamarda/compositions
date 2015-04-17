@extends('me')
@section('page_title')
    SUB GENRES
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">SUB GENRES</div>
                    <div class="panel-body">

                        Sub Genres

                    @foreach ($subgenres AS $subgenre)
                        <div class="row">
                            <div class="col-md-3 ">
                                Genre:
                            </div>
                            <div class="col-md-6 ">
                                {{$subgenre->name}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 ">
                                Description:
                            </div>
                            <div class="col-md-6 ">
                                {{$subgenre->description}}
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

