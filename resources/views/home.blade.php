@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Hi, {{Auth::user()->name}}!!!
                </div>
                <div class="panel-group">
                    <a href="/bricks" class="btn btn-success" role="button" >
                        bricks
                    </a>
                    <a href="/page1" class="btn btn-success" role="button" >
                        Page1
                    </a>
                </div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
