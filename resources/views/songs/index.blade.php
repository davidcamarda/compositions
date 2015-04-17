@extends('me')
@section('page_title')
SONGS LIST
@stop
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="pull-left">SONG LIST</div>
                                <div class="pull-right">
                                    <a href="songs/create">new</a> |
                                    <a href="songs/create">search</a>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @foreach ($songs as $song)

                       <h3>{{$song->name}}</h3>
                        Working Name: {{$song->working_name}}
                            <br />
                            Details: <a href="{{url('/song', $song->id)}}">{{$song->name}}</a>
                            <hr />
                            @endforeach
                              Songs
                    </div>
                </div>
            </div>
        </div>
    </div>
     @stop
@endsection
@section('javascript')
    <script></script>
@stop

