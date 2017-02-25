@extends('WebruBackendViews::layouts.app')

@section('title', 'Dashboard')

@section('__page')
    <div class="row">
        <div class="col-md-12">
            <h1>Dashboard</h1>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li class="active">Data</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-app">
                    <div class="panel-heading">
                        <h3 class="panel-title">Panel title</h3>
                    </div>
                    <div class="panel-body">
                        Panel content
                    </div>
                    <div class="panel-footer">
                        Panel content
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection