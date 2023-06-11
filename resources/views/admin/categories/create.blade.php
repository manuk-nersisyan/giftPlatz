@extends('adminlte::page')

@section('title', 'Create Category')

@section('content_header')
    <div class="row">
        <div class="col-6">
            <h1 class="m-0 text-dark pb-2">Create Category</h1>
        </div>
    </div>
@stop

@section('content')
    <div class="content-box">
        @include('admin.categories.__forms.create-form')
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

