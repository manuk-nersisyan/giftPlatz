@extends('adminlte::page')

@section('title', 'Editor')

@section('content_header')
    <div class="row">
        <div class="col-6">
            <h1 class="m-0 text-dark pb-2">Editor</h1>
        </div>
    </div>
@stop

@section('content')
    <div class="content-box">
        <div class="form-group row">
            <div class="col-2">
                <label for="name" class="required">Name</label>
                <input type="text"
                       name="name"
                       id="name"
                       class="form-control"
                       value="{{ $editor->name }}"
                       disabled>
            </div>
            <div class="col-2">
                <label for="email" class="required">Email</label>
                <input type="email"
                       name="email"
                       id="email"
                       class="form-control"
                       value="{{ $editor->email }}"
                       disabled>
            </div>
        </div>

        <div class="row">
            <div class="col-2">
                <a href="{{ route('editors.index') }}" class="btn btn-primary btn-block">Back</a>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
