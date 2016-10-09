@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        You're now in Bricks!
                    </div>
                    <div class="panel-group">
                        <a href="/home" class="btn btn-success" role="button">
                            Home
                        </a>
                        <a href="/bricks" class="btn btn-success" role="button">
                            Bricks
                        </a>

                    </div>

                    @include('common.bricksGame')
                </div>
            </div>
        </div>
    </div>
@endsection

@if($page = 'bricks')
@section('contentHead')
    <script LANGUAGE="JavaScript"><!--
        str_vict="Вы ЭТО сделали";
        function zamen(n){
            var n2 ;
            for ( var i=0; 16>i; ++i ){if (document.getElementsByTagName("button")[i].name=="16"){n2=i;}}
            if ((n-n2==4) || (n2-n==4) || ((n-n2==1)&&(Math.floor(n/4)==Math.floor(n2/4))) || ((n2-n==1)&&(Math.floor(n/4)==Math.floor(n2/4))) ){

                document.getElementsByTagName("button")[n2].name = document.getElementsByTagName("button")[n].name;
                document.getElementsByTagName("button")[n].name = "16";
                document.getElementsByTagName("button")[n].value = "+";
            }
            n2=0
            for ( var i=0; 13>i; ++i ){if (document.getElementsByTagName("button")[i].name==i+1){n2=++n2;}}
            if ((n2==13) && (document.getElementsByTagName("button")[15].name==16)) {alert(str_vict);zan();}
        }
        function zan(){
            var p1 = new Image();var p2 = new Image();var imgs_ = new Image();var name_;


            for ( var i=0; 50>i; ++i ){
                p1 = Math.floor(Math.random()*16);p2 = Math.floor(Math.random()*16);
                //imgs_ = document.getElementsByTagName("button")[p1].src;document.getElementsByTagName("button")[p1].src = document.getElementsByTagName("button")[p2].src;document.getElementsByTagName("button")[p2].src = imgs_;
                name_ = document.getElementsByTagName("button")[p1].name;document.getElementsByTagName("button")[p1].name = document.getElementsByTagName("button")[p2].name;document.getElementsByTagName("button")[p2].name = name_;
            }
        }

        function say() {
            document.getElementsByName("say")[0].value = "!!!";
            print( document.getElementById("say"));
        }

        //--></script>
@endsection
@endif