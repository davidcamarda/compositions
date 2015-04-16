@extends('me')
@section('page_title')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">New Song</div>

                <!--    NEW SONG FORM -->
                {!! Form::open(['url' => 'songs'] ) !!}
        <div class="row form-group">
            <div class="col-md-3">
                <div class="pull-right">
                    {!! Form::label('name','Name:') !!}
                </div>
            </div>
            <div class=col-md-9">
                {!! Form::text('name') !!}
            </div>
        </div>

        <div class="row form-group">
            <div class="col-md-3">
                <div class="pull-right">
                    {!! Form::label('working_name','Working Name:') !!}
                </div>
            </div>
            <div class=col-md-9">
                {!! Form::text('working_name') !!}
            </div>
        </div>

        <div class="row form-group">
            <div class="col-md-3">
                <div class="pull-right">
                    {!! Form::label('composer_id','Composer:') !!}
                </div>
            </div>
            <div class=col-md-9">
                {!! Form::select('composer_id', [
                    'David Camarda',
                    'Shane Fortner',
                    'Greg Reynolds'
                    ]
                ) !!}
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="pull-right">
                    {!! Form::label('lyric_id','Lyric:') !!}
                </div>
            </div>
            <div class=col-md-9">
                {!! Form::select('lyric_id', [
                'Brooder',
                'Today',
                'Shart'
                ]
                ) !!}
            </div>
        </div>

        <div class="row form-group">
            <div class="col-md-3">
                <div class="pull-right">
                    {!! Form::submit('Add Song', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
        </div>



        {!! Form::close() !!}

    </div>
    </div>
        </div>
    </div>
    </div>
    </div>
@stop