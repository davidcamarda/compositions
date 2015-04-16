@extends('me')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">SONG LIST</div>


                    <div class="panel-body">
                        @foreach ($songs as $song)


                       <h3>{{$song->name}}</h3>

                        Working Name: {{$song->working_name}}
                            <br />
                            Details: <a href="{{url('/song', $song->id)}}">{{$song->name}}</a>
                            <hr />
                            @endforeach

                                    <h4>Just some filler crap</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
     @stop
@endsection
