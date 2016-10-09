@extends('layouts.app')

@section('content')
    <div class="panel-group">
        <div class="panel-body" align="center">

            @foreach($page as $p)
                <p class="alert-success">


                <form action="/page1/update/{{$p->id}}" method="post">
                    {{ csrf_field() }}
                    <input type="text" value="{{$p->name}}" name="name">
                    <button class="btn btn-sm btn-info" type="submit" id="{{$p->id}}">
                        <span class="glyphicon-pencil"></span>
                    </button>
                    <a role="button"class="btn btn-sm btn-danger" href="/page1/delete/{{$p->id}}" id="{{$p->id}}">
                        DEL
                    </a>
                </form>



                </p>

            @endforeach
                <hr>
            <form action="/page1/add" method="post">
                {{ csrf_field() }}
                <input type="text" class="text-info" width="100%" name="name" placeholder="Введите текст">

                <button class="btn btn-sm btn-success" type="submit">Добавить запись</button>
            </form>
        </div>

    </div>
@endsection