@extends('adminlte::page')

@section('title', 'Category')

@section('content_header')
    <div class="row">
        <div class="col-6">
            <h1 class="m-0 text-dark pb-2">Category</h1>
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
                       value="{{ $category->name }}"
                       disabled>
            </div>
            <div class="col-2">
                <label class="pt-2 mt-30" for="is_active">Is Active</label>
                <input type="checkbox" name="is_active" id="is_active" @if($category->is_active == true)checked @endif disabled>
            </div>
        </div>

        <div class="row">
            <div class="col-2">
                <a href="{{ route('categories.index') }}" class="btn btn-primary btn-block">Back</a>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
