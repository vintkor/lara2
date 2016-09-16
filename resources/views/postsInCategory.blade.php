@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Новости - {{ $name }}
                    </div>
                    <div class="panel-body">
                        Тут будут все новости из категории {{ $name }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop