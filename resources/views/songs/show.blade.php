@extends('me')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">SONG LIST</div>

                    <div class="panel-body">
              <h4>{{$song->name}}</h4>
                        <h6>Working Name: <small>{{$song->working_name}}</small></h6>
                        <br />
                            <h6>Composer: <small>{{$song->composer_id}}</small></h6>
                        <br />
                                <h6>Lyric:<small>{{$song->lyric_id}}</small></h6>
                        <br />

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
